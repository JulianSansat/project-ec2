<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
use Phalcon\Forms\Element\Select;

class GuestsForm extends Form
{

    public function initialize($entity = null, $options = null)
    {
        // Name
        $name = new Text('name');
        $name->setLabel('Seu nome');
        $name->setFilters(array('striptags', 'string'));
        $name->addValidators(array(
            new PresenceOf(array(
                'message' => 'É necessário informar o nome'
            ))
        ));
        $this->add($name);

        // Name
        $tel = new Text('tel');
        $tel->setLabel('Telefone');
        $tel->setFilters(array('int'));
        $tel->addValidators(array(
            new PresenceOf(array(
                'message' => 'É necessário informar o telefone'
            ))
        ));
        $this->add($tel);

        // Email
        $email = new Text('email');
        $email->setLabel('E-Mail');
        $email->setFilters('email');
        $email->addValidators(array(
            new PresenceOf(array(
                'message' => 'E-mail é requerido'
            )),
            new Email(array(
                'message' => 'E-mail não valido'
            ))
        ));
        $this->add($email);

        // escolarship
        $escolarship = new Select(
            'escolarship', [
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
        $escolarship->addValidators(array(
            new PresenceOf(array(
                'message' => 'É necessário informar a escolaridade'
            ))
        ));
        $this->add($escolarship);

        $age = new text('age');
        $age->setLabel('Idade');
        $age->addValidators(array(
            new PresenceOf(array(
                'message' => 'É necessário informar a idade'
            ))
        ));
        $this->add($age);

        $study_area = new text('study_area');
        $study_area->setLabel('Area de estudo');
        $study_area->addValidators(array(
            new PresenceOf(array(
                'message' => 'É necessário informar a area de estudos'
            ))
        ));
        $this->add($study_area);
    }
}