<?php
use Phalcon\Mvc\Controller;
/**
 * SessionController
 *
 * Allows to authenticate users
 */
class SessionController extends Controller
{
    public function initialize()
    {
        $this->assets->addJs('public/js/jquery.min.js');
    }

    public function indexAction()
    {
        $this->view->setTemplateAfter('main');
        $this->tag->setTitle('Sign Up/Sign In');
        if (!$this->request->isPost()) {
            if($this->session->get('auth')){
                $this->session->remove('auth');
            }
        }
    }

    /**
     * Register an authenticated user into session data
     *
     * @param Users $user
     */
    private function _registerSession(Users $user)
    {
        $this->session->set('auth', array(
            'id' => $user->id,
            'name' => $user->name,
            'role' => 'Users'
        ));
    }

    /**
     * This action authenticate and logs an user into the application
     *
     */
    public function startAction()
    {
        if ($this->request->isPost()) {

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = Users::findFirst(array(
                "(email = :email: OR username = :email:) AND password = :password: AND active = 'Y'",
                'bind' => array('email' => $email, 'password' => sha1($password))
            ));
            if ($user != false) {
                $this->_registerSession($user);
                $this->flash->success('Welcome ' . $user->name);

                return $this->dispatcher->forward(
                    [
                        "controller" => "invoices",
                        "action"     => "index",
                    ]
                );
            }

            $this->flash->error('Wrong email/password');
        }

        return $this->dispatcher->forward(
            [
                "controller" => "session",
                "action"     => "index",
            ]
        );
    }

    /**
     * Finishes the active session redirecting to the index
     *
     * @return unknown
     */
    public function endAction()
    {
        $auth = $this->session->get('auth');
		
        $this->session->remove('auth');

        if ($auth['role'] != 'Guests'){
                $this->flash->success('Goodbye!');
                return $this->dispatcher->forward(
                [
                    "controller" => "index",
                    "action"     => "index",
                ]
            ); 
		} 

        $this->view->setTemplateAfter('container');
        
    }
}
