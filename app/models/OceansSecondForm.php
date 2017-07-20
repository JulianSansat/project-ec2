<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\PresenceOf;

class OceansSecondForm extends Form
{

    public function initialize($entity = null, $options = null)
    {

        $alt1q19 = new \Phalcon\Forms\Element\Radio("alt1q19", ['name' => 'q19', 'value' => 'Concordo']);
        $alt1q19->setLabel('Concordo'); 
        
        $alt2q19 = new \Phalcon\Forms\Element\Radio("alt2q19", ['name' => 'q19', 'value' => 'Não tenho opinião']);
        $alt2q19->setLabel('Não tenho opinião');

        $alt3q19 = new \Phalcon\Forms\Element\Radio("alt3q19", ['name' => 'q19', 'value' => 'Discordo']);
        $alt3q19->setLabel('Discordo');
        
        $this->add($alt1q19);
        $this->add($alt2q19);
        $this->add($alt3q19);

        $alt1q20 = new \Phalcon\Forms\Element\Radio("alt1q20", ['name' => 'q20', 'value' => 'Concordo']);
        $alt1q20->setLabel('Concordo'); 
        
        $alt2q20 = new \Phalcon\Forms\Element\Radio("alt2q20", ['name' => 'q20', 'value' => 'Não tenho opinião']);
        $alt2q20->setLabel('Não tenho opinião');

        $alt3q20 = new \Phalcon\Forms\Element\Radio("alt3q20", ['name' => 'q20', 'value' => 'Discordo']);
        $alt3q20->setLabel('Discordo');
        
        $this->add($alt1q20);
        $this->add($alt2q20);
        $this->add($alt3q20);

        $alt1q21 = new \Phalcon\Forms\Element\Radio("alt1q21", ['name' => 'q21', 'value' => 'Concordo']);
        $alt1q21->setLabel('Concordo'); 
        
        $alt2q21 = new \Phalcon\Forms\Element\Radio("alt2q21", ['name' => 'q21', 'value' => 'Não tenho opinião']);
        $alt2q21->setLabel('Não tenho opinião');

        $alt3q21 = new \Phalcon\Forms\Element\Radio("alt3q21", ['name' => 'q21', 'value' => 'Discordo']);
        $alt3q21->setLabel('Discordo');
        
        $this->add($alt1q21);
        $this->add($alt2q21);
        $this->add($alt3q21);

        $alt1q22 = new \Phalcon\Forms\Element\Radio("alt1q22", ['name' => 'q22', 'value' => 'Concordo']);
        $alt1q22->setLabel('Concordo'); 
        
        $alt2q22 = new \Phalcon\Forms\Element\Radio("alt2q22", ['name' => 'q22', 'value' => 'Não tenho opinião']);
        $alt2q22->setLabel('Não tenho opinião');

        $alt3q22 = new \Phalcon\Forms\Element\Radio("alt3q22", ['name' => 'q22', 'value' => 'Discordo']);
        $alt3q22->setLabel('Discordo');
        
        $this->add($alt1q22);
        $this->add($alt2q22);
        $this->add($alt3q22);

        $alt1q23 = new \Phalcon\Forms\Element\Radio("alt1q23", ['name' => 'q23', 'value' => 'Concordo']);
        $alt1q23->setLabel('Concordo'); 
        
        $alt2q23 = new \Phalcon\Forms\Element\Radio("alt2q23", ['name' => 'q23', 'value' => 'Não tenho opinião']);
        $alt2q23->setLabel('Não tenho opinião');

        $alt3q23 = new \Phalcon\Forms\Element\Radio("alt3q23", ['name' => 'q23', 'value' => 'Discordo']);
        $alt3q23->setLabel('Discordo');
        
        $this->add($alt1q23);
        $this->add($alt2q23);
        $this->add($alt3q23);
    }
}