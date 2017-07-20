<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\PresenceOf;

class BanerjeeSecondForm extends Form
{

    public function initialize($entity = null, $options = null)
    {

        $alt1q13 = new \Phalcon\Forms\Element\Radio("alt1q13", ['name' => 'q13', 'value' => 'Positivo']);
        $alt1q13->setLabel('Positivo');
        $alt2q13 = new \Phalcon\Forms\Element\Radio("alt2q13", ['name' => 'q13', 'value' => 'Em parte']);
        $alt2q13->setLabel('Em parte');
        $alt3q13 = new \Phalcon\Forms\Element\Radio("alt3q13", ['name' => 'q13', 'value' => 'Negativo']);
        $alt3q13->setLabel('Negativo');

        $this->add($alt1q13);
        $this->add($alt2q13);
        $this->add($alt3q13);

        $alt1q14 = new \Phalcon\Forms\Element\Radio("alt1q14", ['name' => 'q14', 'value' => 'Positivo']);
        $alt1q14->setLabel('Positivo');
        $alt2q14 = new \Phalcon\Forms\Element\Radio("alt2q14", ['name' => 'q14', 'value' => 'Em parte']);
        $alt2q14->setLabel('Em parte');
        $alt3q14 = new \Phalcon\Forms\Element\Radio("alt3q14", ['name' => 'q14', 'value' => 'Negativo']);
        $alt3q14->setLabel('Negativo');

        $this->add($alt1q14);
        $this->add($alt2q14);
        $this->add($alt3q14);

        $alt1q15 = new \Phalcon\Forms\Element\Radio("alt1q15", ['name' => 'q15', 'value' => 'Positivo']);
        $alt1q15->setLabel('Positivo');
        $alt2q15 = new \Phalcon\Forms\Element\Radio("alt2q15", ['name' => 'q15', 'value' => 'Em parte']);
        $alt2q15->setLabel('Em parte');
        $alt3q15 = new \Phalcon\Forms\Element\Radio("alt3q15", ['name' => 'q15', 'value' => 'Negativo']);
        $alt3q15->setLabel('Negativo');

        $this->add($alt1q15);
        $this->add($alt2q15);
        $this->add($alt3q15);

        $alt1q16 = new \Phalcon\Forms\Element\Radio("alt1q16", ['name' => 'q16', 'value' => 'Positivo']);
        $alt1q16->setLabel('Positivo');
        $alt2q16 = new \Phalcon\Forms\Element\Radio("alt2q16", ['name' => 'q16', 'value' => 'Em parte']);
        $alt2q16->setLabel('Em parte');
        $alt3q16 = new \Phalcon\Forms\Element\Radio("alt3q16", ['name' => 'q16', 'value' => 'Negativo']);
        $alt3q16->setLabel('Negativo');

        $this->add($alt1q16);
        $this->add($alt2q16);
        $this->add($alt3q16);

        $alt1q17 = new \Phalcon\Forms\Element\Radio("alt1q17", ['name' => 'q17', 'value' => 'Sim']);
        $alt1q17->setLabel('Sim');
        $alt2q17 = new \Phalcon\Forms\Element\Radio("alt2q17", ['name' => 'q17', 'value' => 'Não']);
        $alt2q17->setLabel('Não');

        $this->add($alt1q17);
        $this->add($alt2q17);

        $alt1q18 = new \Phalcon\Forms\Element\Radio("alt1q18", ['name' => 'q18', 'value' => 'Sim']);
        $alt1q18->setLabel('Sim');
        $alt2q18 = new \Phalcon\Forms\Element\Radio("alt2q18", ['name' => 'q18', 'value' => 'Não']);
        $alt2q18->setLabel('Não');

        $this->add($alt1q18);
        $this->add($alt2q18);

        $alt1q19 = new \Phalcon\Forms\Element\Radio("alt1q19", ['name' => 'q19', 'value' => 'Sim']);
        $alt1q19->setLabel('Sim');
        $alt2q19 = new \Phalcon\Forms\Element\Radio("alt2q19", ['name' => 'q19', 'value' => 'Não']);
        $alt2q19->setLabel('Não');
        

        $this->add($alt1q19);
        $this->add($alt2q19);

        $alt1q20 = new \Phalcon\Forms\Element\Radio("alt1q20", ['name' => 'q20', 'value' => 'Sim']);
        $alt1q20->setLabel('Sim');
        $alt2q20 = new \Phalcon\Forms\Element\Radio("alt2q20", ['name' => 'q20', 'value' => 'Não']);
        $alt2q20->setLabel('Não');
        
        $alt1q20_1 = new Text('q20_1');
        $alt1q20_1->setLabel('Qual?');

        $this->add($alt1q20);
        $this->add($alt2q20);
        $this->add($alt1q20_1);

        $alt1q21 = new \Phalcon\Forms\Element\Radio("alt1q21", ['name' => 'q21', 'value' => 'Sim']);
        $alt1q21->setLabel('Sim');
        $alt2q21 = new \Phalcon\Forms\Element\Radio("alt2q21", ['name' => 'q21', 'value' => 'Não']);
        $alt2q21->setLabel('Não');
        

        $this->add($alt1q21);
        $this->add($alt2q21);
        
    }
}