<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\PresenceOf;

class PiForm extends Form
{

    public function initialize($entity = null, $options = null)
    {

        $alt1q1 = new \Phalcon\Forms\Element\Radio("alt1q1", ['name' => 'q1', 'value' => 'Básico']);
        $alt1q1->setLabel('Básico'); 
        
        $alt2q1 = new \Phalcon\Forms\Element\Radio("alt2q1", ['name' => 'q1', 'value' => 'Intermediário']);
        $alt2q1->setLabel('Intermediário');

        $alt3q1 = new \Phalcon\Forms\Element\Radio("alt3q1", ['name' => 'q1', 'value' => 'Avançado']);
        $alt3q1->setLabel('Avançado');

        $alt4q1 = new \Phalcon\Forms\Element\Radio("alt4q1", ['name' => 'q1', 'value' => 'Inexistente']);
        $alt4q1->setLabel('Inexistente');
        
        $this->add($alt1q1);
        $this->add($alt2q1);
        $this->add($alt3q1);
        $this->add($alt4q1);

        $alt1q2 = new \Phalcon\Forms\Element\Radio("alt1q2", ['name' => 'q2', 'value' => 'Sim']);
        $alt1q2->setLabel('Sim');
        $alt2q2 = new \Phalcon\Forms\Element\Radio("alt2q2", ['name' => 'q2', 'value' => 'Não']);
        $alt2q2->setLabel('Não');

        $this->add($alt1q2);
        $this->add($alt2q2);

        $alt1q3 = new \Phalcon\Forms\Element\Radio("alt1q3", ['name' => 'q3', 'value' => 'Sim']);
        $alt1q3->setLabel('Sim');
        $alt2q3 = new \Phalcon\Forms\Element\Radio("alt2q3", ['name' => 'q3', 'value' => 'Não']);
        $alt2q3->setLabel('Não');

        $this->add($alt1q3);
        $this->add($alt2q3);

        $alt1q4 = new Check('alt1q4', ['name' => 'aq4[]', 'value' => "Políticas públicas de nível nacional"]);
        $alt1q4->setLabel('Políticas públicas de nível nacional');
        $alt2q4 = new Check('alt2q4', ['name' => 'aq4[]', 'value' => "Leis de Propriedade Intelectual"]);
        $alt2q4->setLabel('Leis de Propriedade Intelectual');
        $alt3q4 = new Check('alt3q4', ['name' => 'aq4[]', 'value' => "Acordos comerciais internacionais e nacionais"]);
        $alt3q4->setLabel('Acordos comerciais internacionais e nacionais');
        $alt4q4 = new Check('alt4q4', ['name' => 'aq4[]', 'value' => "Financiamento de novas tecnologias"]);
        $alt4q4->setLabel('Financiamento de novas tecnologias');
        $alt5q4 = new Check('alt5q4', ['name' => 'aq4[]', 'value' => "Políticas ligadas ao comércio internacional"]);
        $alt5q4->setLabel('Políticas ligadas ao comércio internacional');
        $alt6q4 = new Check('alt6q4', ['name' => 'aq4[]', 'value' => "Não sei."]);
        $alt6q4->setLabel('Não sei.');

        $this->add($alt1q4);
        $this->add($alt2q4);
        $this->add($alt3q4);
        $this->add($alt4q4);
        $this->add($alt5q4);
        $this->add($alt6q4);

        $alt1q5 = new \Phalcon\Forms\Element\Radio("alt1q5", ['name' => 'q5', 'value' => 'Sim']);
        $alt1q5->setLabel('Sim');
        $alt2q5 = new \Phalcon\Forms\Element\Radio("alt2q5", ['name' => 'q5', 'value' => 'Não']);
        $alt2q5->setLabel('Não');

        $this->add($alt1q5);
        $this->add($alt2q5);

        $alt1q6 = new \Phalcon\Forms\Element\Radio("alt1q6", ['name' => 'q6', 'value' => 'Um fator benéfico']);
        $alt1q6->setLabel('Um fator benéfico');
        $alt2q6 = new \Phalcon\Forms\Element\Radio("alt2q6", ['name' => 'q6', 'value' => 'Um fator negativo']);
        $alt2q6->setLabel('Um fator negativo');
        $alt3q6 = new \Phalcon\Forms\Element\Radio("alt3q6", ['name' => 'q6', 'value' => 'Não sei']);
        $alt3q6->setLabel('Não sei');

        $this->add($alt1q6);
        $this->add($alt2q6);
        $this->add($alt3q6);

        $alt1q7 = new \Phalcon\Forms\Element\Radio("alt1q7", ['name' => 'q7', 'value' => 'Sim']);
        $alt1q7->setLabel('Sim');
        $alt2q7 = new \Phalcon\Forms\Element\Radio("alt2q7", ['name' => 'q7', 'value' => 'Não']);
        $alt2q7->setLabel('Não');

        $this->add($alt1q7);
        $this->add($alt2q7);

        $alt1q8 = new \Phalcon\Forms\Element\Radio("alt1q8", ['name' => 'q8', 'value' => 'Sim']);
        $alt1q8->setLabel('Sim');
        $alt2q8 = new \Phalcon\Forms\Element\Radio("alt2q8", ['name' => 'q8', 'value' => 'Não']);
        $alt2q8->setLabel('Não');

        $this->add($alt1q8);
        $this->add($alt2q8);

        $alt1q9 = new \Phalcon\Forms\Element\Radio("alt1q9", ['name' => 'q9', 'value' => 'Da esfera governamental']);
        $alt1q9->setLabel('Da esfera governamental');
        $alt2q9 = new \Phalcon\Forms\Element\Radio("alt2q9", ['name' => 'q9', 'value' => 'Da esfera privada']);
        $alt2q9->setLabel('Da esfera privada');
        $alt3q9 = new \Phalcon\Forms\Element\Radio("alt3q9", ['name' => 'q9', 'value' => 'Dos setores público e privado juntos']);
        $alt3q9->setLabel('Dos setores público e privado juntos');
        $alt4q9 = new \Phalcon\Forms\Element\Radio("alt4q9", ['name' => 'q9', 'value' => 'Não sei.']);
        $alt4q9->setLabel('Não sei.');

        $this->add($alt1q9);
        $this->add($alt2q9);
        $this->add($alt3q9);
        $this->add($alt4q9);

        $alt1q10 = new Check("alt1q10", ['name' => 'aq10[]', 'value' => 'Políticas de medicamentos genéricos']);
        $alt1q10->setLabel('Políticas de medicamentos genéricos');
        $alt2q10 = new Check("alt2q10", ['name' => 'aq10[]', 'value' => 'Controle de preços']);
        $alt2q10->setLabel('Controle de preços');
        $alt3q10 = new Check("alt3q10", ['name' => 'aq10[]', 'value' => 'Avaliação de Tecnologias da Saúde']);
        $alt3q10->setLabel('Avaliação de Tecnologias da Saúde');
        $alt4q10 = new Check("alt4q10", ['name' => 'aq10[]', 'value' => 'Redução de impostos']);
        $alt4q10->setLabel('Redução de impostos');
        $alt5q10 = new Check("alt5q10", ['name' => 'aq10[]', 'value' => 'Mecanismos de aquisição eficazes e eficientes']);
        $alt5q10->setLabel('Mecanismos de aquisição eficazes e eficientes');
        $alt6q10 = new Check("alt6q10", ['name' => 'aq10[]', 'value' => 'Regulação geral de produtos farmacêuticos']);
        $alt6q10->setLabel('Regulação geral de produtos farmacêuticos');
        $alt7q10 = new Check("alt7q10", ['name' => 'aq10[]', 'value' => 'Outro']);
        $alt7q10->setLabel('Outras');
        $alt8q10 = new Check("alt8q10", ['name' => 'aq10[]', 'value' => 'Não sei']);
        $alt8q10->setLabel('Não sei');

        $alt1q10_1 = new Text('q10_1');
        $alt1q10_1->setLabel('Qual?');

        $this->add($alt1q10);
        $this->add($alt2q10);
        $this->add($alt3q10);
        $this->add($alt4q10);
        $this->add($alt5q10);
        $this->add($alt6q10);
        $this->add($alt7q10);
        $this->add($alt8q10);

        $this->add($alt1q10_1);



    }
}