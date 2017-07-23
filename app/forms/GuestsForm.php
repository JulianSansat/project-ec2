<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Select;

class GuestsForm extends Form
{

    public function initialize($entity = null, $options = null)
    {
        // Name
        $name = new Text('name');
        $name->setLabel('Seu nome');
        $this->add($name);

        // Name
        $tel = new Text('tel');
        $tel->setLabel('Telefone');
        $this->add($tel);

        // Email
        $email = new Text('email');
        $email->setLabel('E-Mail');
        $this->add($email);

        // escolarship
        $escolarship = new Select(
            'escolarship', [
                NULL => NULL,
                "Ensino Fundamental Incompleto" => "Ensino Fundamental Incompleto",
                "Ensino Fundamental Completo" => "Ensino Fundamental Completo",
                "Ensino Médio Incompleto" => "Ensino Médio Incompleto",
                "Ensino Superior Incompleto" => "Ensino Superior Incompleto",
                "Ensino Superior Completo" => "Ensino Superior Completo",
                "Pós-graduação(especialização/MBA)" => "Pós-graduação(especialização/MBA)",
                "Mestrado" => "Mestrado",
                "Doutorado" => "Doutorado",
            ]);
        $escolarship->setLabel('Escolaridade');
        $this->add($escolarship);

        $age = new text('age');
        $age->setLabel('Idade');
        $this->add($age);

        $study_area = new text('study_area');
        $study_area->setLabel('Area de estudo');
        $this->add($study_area);
    }
}