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
            $guestData = $this->request->getPost();
            /*$name = $this->request->getPost('name', array('string', 'striptags'));
            $sugestion = $this->request->getPost('tel', 'int');
            $email = $this->request->getPost('email', 'email');
            $escolarship = $this->request->getPost('escolarship');
            $age = $this->request->getPost('age');
            $study_area = $this->request->getPost('study_area');*/


            $guest = new Guests();

            if (isset($guestData["name"]) && !empty($guestData["name"])){
                $guest->name = strip_tags($guestData["name"]);
            }

            if (isset($guestData["tel"]) && !empty($guestData["tel"])){
                $guest->tel = strip_tags($guestData["tel"]);
            }

            if (isset($guestData["email"]) && !empty($guestData["email"])){
                $guest->email = strip_tags($guestData["email"]);
            }

            if (isset($guestData["escolarship"]) && !empty($guestData["escolarship"])){
                $guest->escolarship = strip_tags($guestData["escolarship"]);
            }

            if (isset($guestData["age"]) && !empty($guestData["age"])){
                $guest->age = strip_tags($guestData["age"]);
            }
            
            if (isset($guestData["study_area"]) && !empty($guestData["study_area"])){
                $guest->study_area = strip_tags($guestData["study_area"]);
            }

            $guest->created_at = new Phalcon\Db\RawValue('now()');
            if ($guest->save() == false) {
                foreach ($guest->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {

                $ocean = new Oceans();
                $ocean->guest_id = $guest->id;
                $ocean_second = new OceansSecond();
                $ocean_second->guest_id = $guest->id;
                $ocean_third = new OceansThird();
                $ocean_third->guest_id = $guest->id;
                $banerjee = new Banerjee();
                $banerjee->guest_id = $guest->id;
                $banerjee_second = new BanerjeeSecond();
                $banerjee_second->guest_id = $guest->id;
                $banerjee_third = new BanerjeeThird();
                $banerjee_third->guest_id = $guest->id;
                $pi = new Pi();
                $pi->guest_id = $guest->id;
                $pi_second = new PiSecond();
                $pi_second->guest_id = $guest->id;
                $pi_third = new PiThird();
                $pi_third->guest_id = $guest->id;
                
                if ($ocean->save() == false) {
                    foreach ($ocean->getMessages() as $message) {
                        die(print_r($message));
                    }
                }
                #$ocean->save();
                $ocean_second->save();
                $ocean_third->save();
                $banerjee->save();         
                $banerjee_second->save();
                $banerjee_third->save(); 
                $pi->save();  
                $pi_second->save(); 
                $pi_third->save();

                $guest->ocean_id = $ocean->id;
                $guest->ocean_second_id = $ocean_second->id;
                $guest->ocean_third_id = $ocean_third->id;
                $guest->banerjee_id = $banerjee->id;
                $guest->banerjee_second_id = $banerjee_second->id;
                $guest->banerjee_third_id = $banerjee_third->id;
                $guest->pi_id = $pi->id;
                $guest->pi_second_id = $pi_second->id;
                $guest->pi_third_id = $pi_third->id; 

                if ($guest->save() == false) {
                foreach ($guest->getMessages() as $message) 
                    {
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
            // $ocean = new Oceans($data);
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            
            $ocean = Oceans::findFirst($guests->ocean_id);

            $ocean->guest_id = $guests->id;

            if(isset($data["aq3"])) {
                $ocean->setQ3(implode(" ",$data["aq3"]));
            }
            if(isset($data["aq8"])) {
                $ocean->setQ8(implode(" ",$data["aq8"]));
            }
            if(isset($data["aq10"])) {
                $ocean->setQ10(implode(" ",$data["aq10"]));
            }
            
            if ($ocean->save($data) == false) {
                foreach ($ocean->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
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

            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            
            $ocean_second = OceansSecond::findFirst($guests->ocean_second_id);
            $ocean_second->guest_id = $guests->id;

            if ($ocean_second->save($data) == false) {
                foreach ($ocean_second->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
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

            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            
            $ocean_third = OceansThird::findFirst($guests->ocean_third_id);
            $ocean_third->guest_id = $guests->id;

            if ($ocean_third->save($data) == false) {
                foreach ($ocean_third->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
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

            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            
            $banerjee = Banerjee::findFirst($guests->banerjee_id);
            $banerjee->guest_id = $guests->id;

            if(isset($data["aq5"])) {
                $banerjee->setQ5(implode(",",$data["aq5"]));
            }

            if ($banerjee->save($data) == false) {
                foreach ($banerjee->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
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

            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            
            $banerjee_second = BanerjeeSecond::findFirst($guests->banerjee_second_id);
            $banerjee_second->guest_id = $guests->id;

            if ($banerjee_second->save($data) == false) {
                foreach ($banerjee_second->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
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
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            
            $banerjee_third = BanerjeeThird::findFirst($guests->banerjee_third_id);
            $banerjee_third->guest_id = $guests->id;

            if ($banerjee_third->save($data) == false) {
                foreach ($banerjee_third->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
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
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            
            $pi = Pi::findFirst($guests->pi_id);
            $pi->guest_id = $guests->id;

            if(isset($data["aq4"])) {
                $pi->setQ4(implode(",",$data["aq4"]));
            }
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            $pi->guest_id = $guests->id;

            if ($pi->save($data) == false) {
                foreach ($pi->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
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
            
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            
            $pi_second = PiSecond::findFirst($guests->pi_second_id);
            $pi_second->guest_id = $guests->id;

            if(isset($data["aq17"])) {
                $pi_second->setQ17(implode(",",$data["aq17"]));
            }
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            $pi_second->guest_id = $guests->id;

            if ($pi_second->save($data) == false) {
                foreach ($pi_second->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
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
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            
            $pi_third = PiThird::findFirst($guests->pi_third_id);
            $pi_third->guest_id = $guests->id;

            if ($pi_third->save($data) == false) {
                foreach ($pi_third->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                //$this->flash->success('Respostas salvas com sucesso, obrigado por participar');
                return $this->dispatcher->forward(
                    [
                        "controller" => "guests",
                        "action"     => "sugestion",
                    ]
                );
            }
        }
    }

    public function sugestionAction(){
       
    }

    public function sugestionSendAction(){
        if ($this->request->isPost()) {
            $data = $this->request->getPost();
            $auth = $this->session->get('auth');
            $guests = Guests::findFirst($auth['id']);
            

            if (isset($data["sugestion"]) && !empty($data["sugestion"])){
                $guests->sugestion = strip_tags($data["sugestion"]);
            }

            if ($guests->save() == false) {
                foreach ($guests->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
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