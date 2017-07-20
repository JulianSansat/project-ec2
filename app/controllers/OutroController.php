<?php

class OutroController extends ControllerBase
{

    public function indexAction()
    {
        die(print_r($this->session->get('auth'))); 
        $guest = Guests::findFirst($auth['id']);
    }

}

