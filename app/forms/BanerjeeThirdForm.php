<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\PresenceOf;

class BanerjeeThirdForm extends Form
{

    public function initialize($entity = null, $options = null)
    {

        $alt1q22 = new \Phalcon\Forms\Element\Radio("alt1q22", ['name' => 'q22', 'value' => 'Sim']);
        $alt1q22->setLabel('Sim');
        $alt2q22 = new \Phalcon\Forms\Element\Radio("alt2q22", ['name' => 'q22', 'value' => 'Não']);
        $alt2q22->setLabel('Não');

        $this->add($alt1q22);
        $this->add($alt2q22);

        $alt1q23 = new \Phalcon\Forms\Element\Radio("alt1q23", ['name' => 'q23', 'value' => 'Sim']);
        $alt1q23->setLabel('Sim');
        $alt2q23 = new \Phalcon\Forms\Element\Radio("alt2q23", ['name' => 'q23', 'value' => 'Não']);
        $alt2q23->setLabel('Não');

        $this->add($alt1q23);
        $this->add($alt2q23);

        $alt1q24 = new \Phalcon\Forms\Element\Radio("alt1q24", ['name' => 'q24', 'value' => 'Sim']);
        $alt1q24->setLabel('Sim');
        $alt2q24 = new \Phalcon\Forms\Element\Radio("alt2q24", ['name' => 'q24', 'value' => 'Não']);
        $alt2q24->setLabel('Não');

        $this->add($alt1q24);
        $this->add($alt2q24);

        $alt1q25 = new \Phalcon\Forms\Element\Radio("alt1q25", ['name' => 'q25', 'value' => 'Sim']);
        $alt1q25->setLabel('Sim');
        $alt2q25 = new \Phalcon\Forms\Element\Radio("alt2q25", ['name' => 'q25', 'value' => 'Não']);
        $alt2q25->setLabel('Não');
        $alt3q25 = new \Phalcon\Forms\Element\Radio("alt3q25", ['name' => 'q25', 'value' => 'Indiferente']);
        $alt3q25->setLabel('Indiferente');

        $this->add($alt1q25);
        $this->add($alt2q25);
        $this->add($alt3q25);


        $alt1q26 = new \Phalcon\Forms\Element\Radio("alt1q26", ['name' => 'q26', 'value' => 'Sim']);
        $alt1q26->setLabel('Sim');
        $alt2q26 = new \Phalcon\Forms\Element\Radio("alt2q26", ['name' => 'q26', 'value' => 'Não']);
        $alt2q26->setLabel('Não');
        $alt1q26_1 = new Text('q26_1');
        $alt1q26_1->setLabel('Qual?');

        $this->add($alt1q26);
        $this->add($alt2q26);
        $this->add($alt1q26_1);

        $alt1q27 = new \Phalcon\Forms\Element\Radio("alt1q27", ['name' => 'q27', 'value' => 'Positivo']);
        $alt1q27->setLabel('Positivo');
        $alt2q27 = new \Phalcon\Forms\Element\Radio("alt2q27", ['name' => 'q27', 'value' => 'Em parte']);
        $alt2q27->setLabel('Em parte');
        $alt3q27 = new \Phalcon\Forms\Element\Radio("alt3q27", ['name' => 'q27', 'value' => 'Negativo']);
        $alt3q27->setLabel('Negativo');

        $this->add($alt1q27);
        $this->add($alt2q27);
        $this->add($alt3q27);

        $alt1q28 = new \Phalcon\Forms\Element\Radio("alt1q28", ['name' => 'q28', 'value' => 'Positivo']);
        $alt1q28->setLabel('Positivo');
        $alt2q28 = new \Phalcon\Forms\Element\Radio("alt2q28", ['name' => 'q28', 'value' => 'Em parte']);
        $alt2q28->setLabel('Em parte');
        $alt3q28 = new \Phalcon\Forms\Element\Radio("alt3q28", ['name' => 'q28', 'value' => 'Negativo']);
        $alt3q28->setLabel('Negativo');

        $this->add($alt1q28);
        $this->add($alt2q28);
        $this->add($alt3q28);

        $alt1q29 = new \Phalcon\Forms\Element\Radio("alt1q29", ['name' => 'q29', 'value' => 'Positivo']);
        $alt1q29->setLabel('Positivo');
        $alt2q29 = new \Phalcon\Forms\Element\Radio("alt2q29", ['name' => 'q29', 'value' => 'Em parte']);
        $alt2q29->setLabel('Em parte');
        $alt3q29 = new \Phalcon\Forms\Element\Radio("alt3q29", ['name' => 'q29', 'value' => 'Negativo']);
        $alt3q29->setLabel('Negativo');

        $this->add($alt1q29);
        $this->add($alt2q29);
        $this->add($alt3q29);

        $alt1q30 = new \Phalcon\Forms\Element\Radio("alt1q30", ['name' => 'q30', 'value' => 'Positivo']);
        $alt1q30->setLabel('Positivo');
        $alt2q30 = new \Phalcon\Forms\Element\Radio("alt2q30", ['name' => 'q30', 'value' => 'Em parte']);
        $alt2q30->setLabel('Em parte');
        $alt3q30 = new \Phalcon\Forms\Element\Radio("alt3q30", ['name' => 'q30', 'value' => 'Negativo']);
        $alt3q30->setLabel('Negativo');

        $this->add($alt1q30);
        $this->add($alt2q30);
        $this->add($alt3q30);

        $alt1q31 = new \Phalcon\Forms\Element\Radio("alt1q31", ['name' => 'q31', 'value' => 'Positivo']);
        $alt1q31->setLabel('Positivo');
        $alt2q31 = new \Phalcon\Forms\Element\Radio("alt2q31", ['name' => 'q31', 'value' => 'Em parte']);
        $alt2q31->setLabel('Em parte');
        $alt3q31 = new \Phalcon\Forms\Element\Radio("alt3q31", ['name' => 'q31', 'value' => 'Negativo']);
        $alt3q31->setLabel('Negativo');

        $this->add($alt1q31);
        $this->add($alt2q31);
        $this->add($alt3q31);

        $alt1q32 = new Text('q32');

        $this->add($alt1q32);

    }
}