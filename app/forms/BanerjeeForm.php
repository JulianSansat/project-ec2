<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\PresenceOf;

class BanerjeeForm extends Form
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

        $alt1q4 = new \Phalcon\Forms\Element\Radio("alt1q4", ['name' => 'q4', 'value' => 'Sim']);
        $alt1q4->setLabel('Sim');
        $alt2q4 = new \Phalcon\Forms\Element\Radio("alt2q4", ['name' => 'q4', 'value' => 'Não']);
        $alt2q4->setLabel('Não');

        $this->add($alt1q4);
        $this->add($alt2q4);

        $alt1q5 = new Check('alt1q5', ['name' => 'aq5[]', 'value' => "Avaliação de necessidades."]);
        $alt1q5->setLabel('Avaliação de necessidades.');
        $alt2q5 = new Check('alt2q5', ['name' => 'aq5[]', 'value' => "Análise teórica de projeto."]);
        $alt2q5->setLabel('Análise teórica de projeto.');
        $alt3q5 = new Check('alt3q5', ['name' => 'aq5[]', 'value' => "Avaliação de processos."]);
        $alt3q5->setLabel('Avaliação de processos.');
        $alt4q5 = new Check('alt4q5', ['name' => 'aq5[]', 'value' => "Avaliação de impacto."]);
        $alt4q5->setLabel('Avaliação de impacto.');
        $alt5q5 = new Check('alt5q5', ['name' => 'aq5[]', 'value' => "Análise de custo-benefício, custo-eficácia e custo-comparação."]);
        $alt5q5->setLabel('Análise de custo-benefício, custo-eficácia e custo-comparação.');
        $alt6q5 = new Check('alt6q5', ['name' => 'aq5[]', 'value' => "Objetivos, resultados e medidas."]);
        $alt6q5->setLabel('Objetivos, resultados e medidas.');
        $alt7q5 = new Check('alt7q5', ['name' => 'aq5[]', 'value' => "Nenhum deles."]);
        $alt7q5->setLabel('Nenhum deles.');

        $this->add($alt1q5);
        $this->add($alt2q5);
        $this->add($alt3q5);
        $this->add($alt4q5);
        $this->add($alt5q5);
        $this->add($alt6q5);
        $this->add($alt7q5);

        $alt1q6 = new Text('q6');
        $alt1q6->setFilters(array('striptags', 'string'));

        $this->add($alt1q6);

        $alt1q7_1 = new \Phalcon\Forms\Element\Radio("alt1q7_1", ['name' => 'q7_1', 'value' => 'Concordo']);
        $alt1q7_1->setLabel('Concordo');
        $alt2q7_1 = new \Phalcon\Forms\Element\Radio("alt2q7_1", ['name' => 'q7_1', 'value' => 'Não tenho opinião']);
        $alt2q7_1->setLabel('Não tenho opinião');
        $alt3q7_1 = new \Phalcon\Forms\Element\Radio("alt3q7_1", ['name' => 'q7_1', 'value' => 'Discordo']);
        $alt3q7_1->setLabel('Discordo');

        $this->add($alt1q7_1);
        $this->add($alt2q7_1);
        $this->add($alt3q7_1);

        $alt1q7_2 = new \Phalcon\Forms\Element\Radio("alt1q7_2", ['name' => 'q7_2', 'value' => 'Concordo']);
        $alt1q7_2->setLabel('Concordo');
        $alt2q7_2 = new \Phalcon\Forms\Element\Radio("alt2q7_2", ['name' => 'q7_2', 'value' => 'Não tenho opinião']);
        $alt2q7_2->setLabel('Não tenho opinião');
        $alt3q7_2 = new \Phalcon\Forms\Element\Radio("alt3q7_2", ['name' => 'q7_2', 'value' => 'Discordo']);
        $alt3q7_2->setLabel('Discordo');

        $this->add($alt1q7_2);
        $this->add($alt2q7_2);
        $this->add($alt3q7_2);

        $alt1q7_3 = new \Phalcon\Forms\Element\Radio("alt1q7_3", ['name' => 'q7_3', 'value' => 'Concordo']);
        $alt1q7_3->setLabel('Concordo');
        $alt2q7_3 = new \Phalcon\Forms\Element\Radio("alt2q7_3", ['name' => 'q7_3', 'value' => 'Não tenho opinião']);
        $alt2q7_3->setLabel('Não tenho opinião');
        $alt3q7_3 = new \Phalcon\Forms\Element\Radio("alt3q7_3", ['name' => 'q7_3', 'value' => 'Discordo']);
        $alt3q7_3->setLabel('Discordo');

        $this->add($alt1q7_3);
        $this->add($alt2q7_3);
        $this->add($alt3q7_3);

        $alt1q7_4 = new \Phalcon\Forms\Element\Radio("alt1q7_4", ['name' => 'q7_4', 'value' => 'Concordo']);
        $alt1q7_4->setLabel('Concordo');
        $alt2q7_4 = new \Phalcon\Forms\Element\Radio("alt2q7_4", ['name' => 'q7_4', 'value' => 'Não tenho opinião']);
        $alt2q7_4->setLabel('Não tenho opinião');
        $alt3q7_4 = new \Phalcon\Forms\Element\Radio("alt3q7_4", ['name' => 'q7_4', 'value' => 'Discordo']);
        $alt3q7_4->setLabel('Discordo');

        $this->add($alt1q7_4);
        $this->add($alt2q7_4);
        $this->add($alt3q7_4);

        $alt1q7_5 = new \Phalcon\Forms\Element\Radio("alt1q7_5", ['name' => 'q7_5', 'value' => 'Concordo']);
        $alt1q7_5->setLabel('Concordo');
        $alt2q7_5 = new \Phalcon\Forms\Element\Radio("alt2q7_5", ['name' => 'q7_5', 'value' => 'Não tenho opinião']);
        $alt2q7_5->setLabel('Não tenho opinião');
        $alt3q7_5 = new \Phalcon\Forms\Element\Radio("alt3q7_5", ['name' => 'q7_5', 'value' => 'Discordo']);
        $alt3q7_5->setLabel('Discordo');

        $this->add($alt1q7_5);
        $this->add($alt2q7_5);
        $this->add($alt3q7_5);

        $alt1q7_6 = new \Phalcon\Forms\Element\Radio("alt1q7_6", ['name' => 'q7_6', 'value' => 'Concordo']);
        $alt1q7_6->setLabel('Concordo');
        $alt2q7_6 = new \Phalcon\Forms\Element\Radio("alt2q7_6", ['name' => 'q7_6', 'value' => 'Não tenho opinião']);
        $alt2q7_6->setLabel('Não tenho opinião');
        $alt3q7_6 = new \Phalcon\Forms\Element\Radio("alt3q7_6", ['name' => 'q7_6', 'value' => 'Discordo']);
        $alt3q7_6->setLabel('Discordo');

        $this->add($alt1q7_6);
        $this->add($alt2q7_6);
        $this->add($alt3q7_6);

        $alt1q8 = new \Phalcon\Forms\Element\Radio("alt1q8", ['name' => 'q8', 'value' => 'Positivo']);
        $alt1q8->setLabel('Positivo');
        $alt2q8 = new \Phalcon\Forms\Element\Radio("alt2q8", ['name' => 'q8', 'value' => 'Em parte']);
        $alt2q8->setLabel('Em parte');
        $alt3q8 = new \Phalcon\Forms\Element\Radio("alt3q8", ['name' => 'q8', 'value' => 'Negativo']);
        $alt3q8->setLabel('Negativo');

        $this->add($alt1q8);
        $this->add($alt2q8);
        $this->add($alt3q8);

        $alt1q9 = new \Phalcon\Forms\Element\Radio("alt1q9", ['name' => 'q9', 'value' => 'Positivo']);
        $alt1q9->setLabel('Positivo');
        $alt2q9 = new \Phalcon\Forms\Element\Radio("alt2q9", ['name' => 'q9', 'value' => 'Em parte']);
        $alt2q9->setLabel('Em parte');
        $alt3q9 = new \Phalcon\Forms\Element\Radio("alt3q9", ['name' => 'q9', 'value' => 'Negativo']);
        $alt3q9->setLabel('Negativo');

        $this->add($alt1q9);
        $this->add($alt2q9);
        $this->add($alt3q9);

        $alt1q10 = new \Phalcon\Forms\Element\Radio("alt1q10", ['name' => 'q10', 'value' => 'Positivo']);
        $alt1q10->setLabel('Positivo');
        $alt2q10 = new \Phalcon\Forms\Element\Radio("alt2q10", ['name' => 'q10', 'value' => 'Em parte']);
        $alt2q10->setLabel('Em parte');
        $alt3q10 = new \Phalcon\Forms\Element\Radio("alt3q10", ['name' => 'q10', 'value' => 'Negativo']);
        $alt3q10->setLabel('Negativo');

        $this->add($alt1q10);
        $this->add($alt2q10);
        $this->add($alt3q10);

        $alt1q11 = new \Phalcon\Forms\Element\Radio("alt1q11", ['name' => 'q11', 'value' => 'Positivo']);
        $alt1q11->setLabel('Positivo');
        $alt2q11 = new \Phalcon\Forms\Element\Radio("alt2q11", ['name' => 'q11', 'value' => 'Em parte']);
        $alt2q11->setLabel('Em parte');
        $alt3q11 = new \Phalcon\Forms\Element\Radio("alt3q11", ['name' => 'q11', 'value' => 'Negativo']);
        $alt3q11->setLabel('Negativo');

        $this->add($alt1q11);
        $this->add($alt2q11);
        $this->add($alt3q11);

        $alt1q12 = new \Phalcon\Forms\Element\Radio("alt1q12", ['name' => 'q12', 'value' => 'Positivo']);
        $alt1q12->setLabel('Positivo');
        $alt2q12 = new \Phalcon\Forms\Element\Radio("alt2q12", ['name' => 'q12', 'value' => 'Em parte']);
        $alt2q12->setLabel('Em parte');
        $alt3q12 = new \Phalcon\Forms\Element\Radio("alt3q12", ['name' => 'q12', 'value' => 'Negativo']);
        $alt3q12->setLabel('Negativo');

        $this->add($alt1q12);
        $this->add($alt2q12);
        $this->add($alt3q12);

        
    }
}