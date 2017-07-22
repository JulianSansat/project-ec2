<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\PresenceOf;

class OceansThirdForm extends Form
{

    public function initialize($entity = null, $options = null)
    {

        $alt1q24 = new \Phalcon\Forms\Element\Radio("alt1q24", ['name' => 'q24', 'value' => 'Concordo']);
        $alt1q24->setLabel('Concordo'); 
        
        $alt2q24 = new \Phalcon\Forms\Element\Radio("alt2q24", ['name' => 'q24', 'value' => 'Não tenho opinião']);
        $alt2q24->setLabel('Não tenho opinião');

        $alt3q24 = new \Phalcon\Forms\Element\Radio("alt3q24", ['name' => 'q24', 'value' => 'Discordo']);
        $alt3q24->setLabel('Discordo');
        
        $this->add($alt1q24);
        $this->add($alt2q24);
        $this->add($alt3q24);

        $alt1q25 = new \Phalcon\Forms\Element\Radio("alt1q25", ['name' => 'q25', 'value' => 'Concordo']);
        $alt1q25->setLabel('Concordo'); 
        
        $alt2q25 = new \Phalcon\Forms\Element\Radio("alt2q25", ['name' => 'q25', 'value' => 'Não tenho opinião']);
        $alt2q25->setLabel('Não tenho opinião');

        $alt3q25 = new \Phalcon\Forms\Element\Radio("alt3q25", ['name' => 'q25', 'value' => 'Discordo']);
        $alt3q25->setLabel('Discordo');
        
        $this->add($alt1q25);
        $this->add($alt2q25);
        $this->add($alt3q25);

        $alt1q26 = new \Phalcon\Forms\Element\Radio("alt1q26", ['name' => 'q26', 'value' => 'Sim']);
        $alt1q26->setLabel('Sim');
        $alt2q26 = new \Phalcon\Forms\Element\Radio("alt2q26", ['name' => 'q26', 'value' => 'Não']);
        $alt2q26->setLabel('Não');

        $this->add($alt1q26);
        $this->add($alt2q26);

        $alt1q27 = new \Phalcon\Forms\Element\Radio("alt1q27", ['name' => 'q27', 'value' => 'Sim']);
        $alt1q27->setLabel('Sim');
        $alt2q27 = new \Phalcon\Forms\Element\Radio("alt2q27", ['name' => 'q27', 'value' => 'Não']);
        $alt2q27->setLabel('Não');

        $this->add($alt1q27);
        $this->add($alt2q27);

        $alt1q28 = new \Phalcon\Forms\Element\Radio("alt1q28", ['name' => 'q28', 'value' => 'Sim']);
        $alt1q28->setLabel('Sim');
        $alt2q28 = new \Phalcon\Forms\Element\Radio("alt2q28", ['name' => 'q28', 'value' => 'Não']);
        $alt2q28->setLabel('Não');

        $this->add($alt1q28);
        $this->add($alt2q28);

        $alt1q29 = new \Phalcon\Forms\Element\Radio("alt1q29", ['name' => 'q29', 'value' => 'Sim']);
        $alt1q29->setLabel('Sim');
        $alt2q29 = new \Phalcon\Forms\Element\Radio("alt2q29", ['name' => 'q29', 'value' => 'Não']);
        $alt2q29->setLabel('Não');

        $this->add($alt1q29);
        $this->add($alt2q29);

        $alt1q30 = new \Phalcon\Forms\Element\Radio("alt1q30", ['name' => 'q30', 'value' => 'Sim']);
        $alt1q30->setLabel('Sim');
        $alt2q30 = new \Phalcon\Forms\Element\Radio("alt2q30", ['name' => 'q30', 'value' => 'Não']);
        $alt2q30->setLabel('Não');

        $this->add($alt1q30);
        $this->add($alt2q30);


    }
}