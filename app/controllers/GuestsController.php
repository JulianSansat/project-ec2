<?php


class GuestsController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Dados participante');
        parent::initialize();
    }

    public function indexAction()
    {
        //if (!$this->session->get('auth'))
        $form = new GuestsForm;

        if ($this->request->isPost()) {

            $name = $this->request->getPost('name', array('string', 'striptags'));
            $tel = $this->request->getPost('tel', 'int');
            $email = $this->request->getPost('email', 'email');
            $escolarship = $this->request->getPost('escolarship');
            $age = $this->request->getPost('age');
            $study_area = $this->request->getPost('study_area');


            $guest = new Guests();
            $guest->name = $name;
            $guest->tel = $tel;
            $guest->name = $name;
            $guest->email = $email;
            $guest->escolarship = $escolarship;
            $guest->age = $age;
            $guest->study_area = $study_area;

            $guest->created_at = new Phalcon\Db\RawValue('now()');
            if ($guest->save() == false) {
                foreach ($guest->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                #$this->tag->setDefault('email', '');
                #$this->tag->setDefault('password', '');
                //$this->flash->success('Obrigado pelas informações, responda os questionarios a seguir');
                $this->session->set('auth', array(
                    'id' => $guest->id,
                    'name' => $guest->name,
                    'role' => 'Guests'
                ));

                return $this->dispatcher->forward(
                    [
                        "controller" => "guests",
                        "action"     => "begin_forms",
                    ]
                );

            }
        }

        $this->view->form = $form;
    }

    public function termsAction(){

    }

    public function begin_formsAction(){
        $form = new OceansForm;
        $this->view->form = $form;
    }

    public function eoa_firstAction(){
        if ($this->request->isPost()) {
            $data = $this->request->getPost();
            $ocean = new Oceans($data);
            if(isset($_POST["aq3"])) {
                $ocean->setQ3(implode(" ",$_POST["aq3"]));
            }
            if(isset($_POST["aq8"])) {
                $ocean->setQ8(implode(" ",$_POST["aq8"]));
            }
            if(isset($_POST["aq10"])) {
                $ocean->setQ10(implode(" ",$_POST["aq10"]));
            }
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            $ocean->guest_id = $guests->id;
            if ($ocean->save() == false) {
                foreach ($ocean->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $guests->ocean_id = $ocean->id;
                if ($guests->update() == false) {
                    foreach ($guests->getMessages() as $message) {
                        $this->flash->error((string) $message);
                    }
                }
                //$this->flash->success('Respostas salvas com sucesso');
                return $this->dispatcher->forward(
                    [
                        "controller" => "guests",
                        "action"     => "eoa_second",
                    ]
                );
            }
        }
    }

    public function eoa_secondAction(){
        $form = new OceansSecondForm;
        $this->view->form = $form;
    }

    public function eoaSendSecondAction(){
        if ($this->request->isPost()) {
            $data = $this->request->getPost();
            $ocean_second = new OceansSecond($data);
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            $ocean_second->guest_id = $guests->id;

            if ($ocean_second->save() == false) {
                foreach ($ocean_second->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $guests->ocean_second_id = $ocean_second->id;
                if ($guests->update() == false) {
                    foreach ($guests->getMessages() as $message) {
                        $this->flash->error((string) $message);
                    }
                }
                //$this->flash->success('Respostas salvas com sucesso');
                return $this->dispatcher->forward(
                    [
                        "controller" => "guests",
                        "action"     => "eoa_third",
                    ]
                );
            }
        }
    }

    public function eoa_thirdAction(){
        $form = new OceansThirdForm;
        $this->view->form = $form;
    }

    public function eoaSendThirdAction(){
        if ($this->request->isPost()) {
            $data = $this->request->getPost();
            $ocean_third = new OceansThird($data);
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            $ocean_third->guest_id = $guests->id;

            if ($ocean_third->save() == false) {
                foreach ($ocean_third->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $guests->ocean_third_id = $ocean_third->id;
                if ($guests->update() == false) {
                    foreach ($guests->getMessages() as $message) {
                        $this->flash->error((string) $message);
                    }
                }
                //$this->flash->success('Respostas salvas com sucesso');
                return $this->dispatcher->forward(
                    [
                        "controller" => "guests",
                        "action"     => "banerjee",
                    ]
                );
            }
        }
    }

    public function banerjeeAction(){
        $form = new BanerjeeForm;
        $this->view->form = $form;
    }

    public function banerjeeSendAction(){
        if ($this->request->isPost()) {
            $data = $this->request->getPost();
            $banerjee = new Banerjee($data);
            if(isset($_POST["aq5"])) {
                $banerjee->setQ5(implode(",",$_POST["aq5"]));
            }
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            $banerjee->guest_id = $guests->id;

            if ($banerjee->save() == false) {
                foreach ($banerjee->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $guests->banerjee_id = $banerjee->id;
                if ($guests->update() == false) {
                    foreach ($guests->getMessages() as $message) {
                        $this->flash->error((string) $message);
                    }
                }
                //$this->flash->success('Respostas salvas com sucesso');
                return $this->dispatcher->forward(
                    [
                        "controller" => "guests",
                        "action"     => "banerjee_second",
                    ]
                );
            }
        }
    }

    public function banerjee_secondAction(){
        $form = new BanerjeeSecondForm;
        $this->view->form = $form;
    }

    public function banerjeeSendSecondAction(){
         if ($this->request->isPost()) {
            $data = $this->request->getPost();
            $banerjee_second = new BanerjeeSecond($data);
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            $banerjee_second->guest_id = $guests->id;

            if ($banerjee_second->save() == false) {
                foreach ($banerjee_second->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $guests->banerjee_second_id = $banerjee_second->id;
                if ($guests->update() == false) {
                    foreach ($guests->getMessages() as $message) {
                        $this->flash->error((string) $message);
                    }
                }
                //$this->flash->success('Respostas salvas com sucesso');
                return $this->dispatcher->forward(
                    [
                        "controller" => "guests",
                        "action"     => "banerjee_third",
                    ]
                );
            }
        }
    }

    public function banerjee_thirdAction(){
        $form = new BanerjeeThirdForm;
        $this->view->form = $form;
    }

    public function banerjeeSendThirdAction(){
        if ($this->request->isPost()) {
            $data = $this->request->getPost();
            $banerjee_third = new BanerjeeThird($data);
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            $banerjee_third->guest_id = $guests->id;

            if ($banerjee_third->save() == false) {
                foreach ($banerjee_third->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $guests->banerjee_third_id = $banerjee_third->id;
                if ($guests->update() == false) {
                    foreach ($guests->getMessages() as $message) {
                        $this->flash->error((string) $message);
                    }
                }
                //$this->flash->success('Respostas salvas com sucesso');
                return $this->dispatcher->forward(
                    [
                        "controller" => "guests",
                        "action"     => "pi",
                    ]
                );
            }
        }
    }

    public function piAction(){
        $form = new PiForm;
        $this->view->form = $form;
    }

    public function piSendAction(){
        if ($this->request->isPost()) {
            $data = $this->request->getPost();
            $pi = new Pi($data);
            if(isset($_POST["aq4"])) {
                $pi->setQ4(implode(",",$_POST["aq4"]));
            }
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            $pi->guest_id = $guests->id;

            if ($pi->save() == false) {
                foreach ($pi->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $guests->pi_id = $pi->id;
                if ($guests->update() == false) {
                    foreach ($guests->getMessages() as $message) {
                        $this->flash->error((string) $message);
                    }
                }
                //$this->flash->success('Respostas salvas com sucesso');
                return $this->dispatcher->forward(
                    [
                        "controller" => "guests",
                        "action"     => "pi_second",
                    ]
                );
            }
        }
    }

    public function pi_secondAction(){
        $form = new PiSecondForm;
        $this->view->form = $form;
    }

    public function piSendSecondAction(){
        if ($this->request->isPost()) {
            $data = $this->request->getPost();
            $pi_second = new PiSecond($data);
            if(isset($_POST["aq17"])) {
                $pi_second->setQ17(implode(",",$_POST["aq17"]));
            }
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            $pi_second->guest_id = $guests->id;

            if ($pi_second->save() == false) {
                foreach ($pi_second->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $guests->pi_second_id = $pi_second->id;
                if ($guests->update() == false) {
                    foreach ($guests->getMessages() as $message) {
                        $this->flash->error((string) $message);
                    }
                }
                //$this->flash->success('Respostas salvas com sucesso');
                return $this->dispatcher->forward(
                    [
                        "controller" => "guests",
                        "action"     => "pi_third",
                    ]
                );
            }
        }
    }

    public function pi_thirdAction(){
        $form = new PiThirdForm;
        $this->view->form = $form;
    }

    public function piSendThirdAction(){
        if ($this->request->isPost()) {
            $data = $this->request->getPost();
            $pi_third = new PiThird($data);
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            $pi_third->guest_id = $guests->id;

            if ($pi_third->save() == false) {
                foreach ($pi_third->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $guests->pi_third_id = $pi_third->id;
                if ($guests->update() == false) {
                    foreach ($guests->getMessages() as $message) {
                        $this->flash->error((string) $message);
                    }
                }
                //$this->flash->success('Respostas salvas com sucesso, obrigado por participar');
                return $this->dispatcher->forward(
                    [
                        "controller" => "session",
                        "action"     => "end",
                    ]
                );
            }
        }
    }

}