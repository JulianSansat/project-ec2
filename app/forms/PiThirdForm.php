<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\PresenceOf;

class PiThirdForm extends Form
{

    public function initialize($entity = null, $options = null)
    {

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

        $alt1q26 = new \Phalcon\Forms\Element\Radio("alt1q26", ['name' => 'q26', 'value' => 'Concordo']);
        $alt1q26->setLabel('Concordo'); 
        
        $alt2q26 = new \Phalcon\Forms\Element\Radio("alt2q26", ['name' => 'q26', 'value' => 'Não tenho opinião']);
        $alt2q26->setLabel('Não tenho opinião');

        $alt3q26 = new \Phalcon\Forms\Element\Radio("alt3q26", ['name' => 'q26', 'value' => 'Discordo']);
        $alt3q26->setLabel('Discordo');
        
        $this->add($alt1q26);
        $this->add($alt2q26);
        $this->add($alt3q26);

        $alt1q27 = new \Phalcon\Forms\Element\Radio("alt1q27", ['name' => 'q27', 'value' => 'Concordo']);
        $alt1q27->setLabel('Concordo'); 
        
        $alt2q27 = new \Phalcon\Forms\Element\Radio("alt2q27", ['name' => 'q27', 'value' => 'Não tenho opinião']);
        $alt2q27->setLabel('Não tenho opinião');

        $alt3q27 = new \Phalcon\Forms\Element\Radio("alt3q27", ['name' => 'q27', 'value' => 'Discordo']);
        $alt3q27->setLabel('Discordo');
        
        $this->add($alt1q27);
        $this->add($alt2q27);
        $this->add($alt3q27);

        $alt1q28 = new \Phalcon\Forms\Element\Radio("alt1q28", ['name' => 'q28', 'value' => 'Concordo']);
        $alt1q28->setLabel('Concordo'); 
        
        $alt2q28 = new \Phalcon\Forms\Element\Radio("alt2q28", ['name' => 'q28', 'value' => 'Não tenho opinião']);
        $alt2q28->setLabel('Não tenho opinião');

        $alt3q28 = new \Phalcon\Forms\Element\Radio("alt3q28", ['name' => 'q28', 'value' => 'Discordo']);
        $alt3q28->setLabel('Discordo');
        
        $this->add($alt1q28);
        $this->add($alt2q28);
        $this->add($alt3q28);

        $alt1q29 = new \Phalcon\Forms\Element\Radio("alt1q29", ['name' => 'q29', 'value' => 'Concordo']);
        $alt1q29->setLabel('Concordo'); 
        
        $alt2q29 = new \Phalcon\Forms\Element\Radio("alt2q29", ['name' => 'q29', 'value' => 'Não tenho opinião']);
        $alt2q29->setLabel('Não tenho opinião');

        $alt3q29 = new \Phalcon\Forms\Element\Radio("alt3q29", ['name' => 'q29', 'value' => 'Discordo']);
        $alt3q29->setLabel('Discordo');
        
        $this->add($alt1q29);
        $this->add($alt2q29);
        $this->add($alt3q29);

        $alt1q30 = new \Phalcon\Forms\Element\Radio("alt1q30", ['name' => 'q30', 'value' => 'Sim']);
        $alt1q30->setLabel('Sim');
        $alt2q30 = new \Phalcon\Forms\Element\Radio("alt2q30", ['name' => 'q30', 'value' => 'Não']);
        $alt2q30->setLabel('Não');

        $this->add($alt1q30);
        $this->add($alt2q30);
    }
}