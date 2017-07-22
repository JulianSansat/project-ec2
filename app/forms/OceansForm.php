<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\PresenceOf;

class OceansForm extends Form
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

        $alt1q2_1 = new \Phalcon\Forms\Element\Radio("alt1q2_1", ['name' => 'q2_1', 'value' => 'Sim']);
        $alt1q2_1->setLabel('Sim');
        $alt2q2_1 = new \Phalcon\Forms\Element\Radio("alt2q2_1", ['name' => 'q2_1', 'value' => 'Não']);
        $alt2q2_1->setLabel('Não');
        $alt3q2_1 = new \Phalcon\Forms\Element\Radio("alt3q2_1", ['name' => 'q2_1', 'value' => 'Não sei']);
        $alt3q2_1->setLabel('Não sei');

        $this->add($alt1q2_1);
        $this->add($alt2q2_1);
        $this->add($alt3q2_1);
//mudar p checkbox
        $alt1q3 = new Check("alt1q3", ['name' => 'aq3[]', 'value' => 'A identificação de aberturas no mercado para o desenvolvimento de novas ofertas de valor (produtos/serviços/experiências.)']);
        $alt1q3->setLabel('A identificação de aberturas no mercado para o desenvolvimento de novas ofertas de valor (produtos/serviços/experiências.)');
        $alt2q3 = new Check("alt2q3", ['name' => 'aq3[]', 'value' => 'Orientar a organização seguindo uma nova estratégia.']);
        $alt2q3->setLabel('Orientar a organização seguindo uma nova estratégia.');
        $alt3q3 = new Check("alt3q3", ['name' => 'aq3[]', 'value' => 'Orientar estrategicamente o desenvolvimento de novos produtos.']);
        $alt3q3->setLabel('Orientar estrategicamente o desenvolvimento de novos produtos.');
        $alt4q3 = new Check("alt4q3", ['name' => 'aq3[]', 'value' => 'Orientar estrategicamente o desenvolvimento de novos serviços.']);
        $alt4q3->setLabel('Orientar estrategicamente o desenvolvimento de novos serviços.');
        $alt5q3 = new Check("alt5q3", ['name' => 'aq3[]', 'value' => 'Estimular estrategicamente a criação de novas experiências.']);
        $alt5q3->setLabel('Estimular estrategicamente a criação de novas experiências.');
        $alt6q3 = new Check("alt6q3", ['name' => 'aq3[]', 'value' => 'Desenvolver estrategicamente novos modelos de negócio.']);
        $alt6q3->setLabel('Desenvolver estrategicamente novos modelos de negócio.');
        $alt7q3 = new Check("alt7q3", ['name' => 'aq3[]', 'value' => 'Outras']);
        $alt7q3->setLabel('Outras');
        $alt8q3 = new Check("alt8q3", ['name' => 'aq3[]', 'value' => 'Não sei']);
        $alt8q3->setLabel('Não sei');

        $this->add($alt1q3);
        $this->add($alt2q3);
        $this->add($alt3q3);
        $this->add($alt4q3);
        $this->add($alt5q3);
        $this->add($alt6q3);
        $this->add($alt7q3);
        $this->add($alt8q3);

        $alt1q4 = new \Phalcon\Forms\Element\Radio("alt1q4", ['name' => 'q4', 'value' => 'A busca para oferecer o melhor produto do setor, visando a competitividade.']);
        $alt1q4->setLabel('A busca para oferecer o melhor produto do setor, visando a competitividade.');
        $alt2q4 = new \Phalcon\Forms\Element\Radio("alt2q4", ['name' => 'q4', 'value' => 'A busca por novas demandas ainda não exploradas por meio da inovação de valor.']);
        $alt2q4->setLabel('A busca por novas demandas ainda não exploradas por meio da inovação de valor.');
        $alt3q4 = new \Phalcon\Forms\Element\Radio("alt3q4", ['name' => 'q4', 'value' => 'Não sei']);
        $alt3q4->setLabel('Não sei');

        $this->add($alt1q4);
        $this->add($alt2q4);
        $this->add($alt3q4);

        $alt1q5 = new Text('q5');
        $alt1q5->setFilters(array('striptags', 'string'));

        $this->add($alt1q5);

        $alt1q6 = new \Phalcon\Forms\Element\Radio("alt1q6", ['name' => 'q6', 'value' => 'Sim']);
        $alt1q6->setLabel('Sim');
        $alt2q6 = new \Phalcon\Forms\Element\Radio("alt2q6", ['name' => 'q6', 'value' => 'Não']);
        $alt2q6->setLabel('Não');
       
        $alt1q6_1 = new Text('q6_1');
        $alt1q6_1->setLabel('Qual?');

        $this->add($alt1q6);
        $this->add($alt2q6);
        $this->add($alt1q6_1);

        $alt1q7 = new \Phalcon\Forms\Element\Radio("alt1q7", ['name' => 'q7', 'value' => 'Sim']);
        $alt1q7->setLabel('Sim');
        $alt2q7 = new \Phalcon\Forms\Element\Radio("alt2q7", ['name' => 'q7', 'value' => 'Não']);
        $alt2q7->setLabel('Não');
        $this->add($alt1q7);
        $this->add($alt2q7);

        //mudar p checkbox

        $alt1q8 = new Check("alt1q8", ['name' => 'aq8[]', 'value' => 'Reconstruir as fronteiras do mercado.']);
        $alt1q8->setLabel('Reconstruir as fronteiras do mercado.');
        $alt2q8 = new Check("alt2q8", ['name' => 'aq8[]', 'value' => 'Concentrar-se no panorama geral, não nos números.']);
        $alt2q8->setLabel('Concentrar-se no panorama geral, não nos números.');
        $alt3q8 = new Check("alt3q8", ['name' => 'aq8[]', 'value' => 'Ir além da demanda existente.']);
        $alt3q8->setLabel('Ir além da demanda existente.');
        $alt4q8 = new Check("alt4q8", ['name' => 'aq8[]', 'value' => 'Acertar a sequência estratégica.']);
        $alt4q8->setLabel('Acertar a sequência estratégica.');
        $alt5q8 = new Check("alt5q8", ['name' => 'aq8[]', 'value' => 'Superar as principais barreiras organizacionais.']);
        $alt5q8->setLabel('Superar as principais barreiras organizacionais.');
        $alt6q8 = new Check("alt6q8", ['name' => 'aq8[]', 'value' => 'Embutir a execução na estratégia.']);
        $alt6q8->setLabel('Embutir a execução na estratégia.');
        $alt7q8 = new Check("alt7q8", ['name' => 'aq8[]', 'value' => 'Desconheço estes princípios']);
        $alt7q8->setLabel('Desconheço estes princípios');
        $alt8q8 = new Check("alt8q8", ['name' => 'aq8[]', 'value' => 'Utiliza-se outros termos para estes princípios.']);
        $alt8q8->setLabel('Utiliza-se outros termos para estes princípios.');


        $this->add($alt1q8);
        $this->add($alt2q8);
        $this->add($alt3q8);
        $this->add($alt4q8);
        $this->add($alt5q8);
        $this->add($alt6q8);
        $this->add($alt7q8);
        $this->add($alt8q8);

        $alt1q9 = new \Phalcon\Forms\Element\Radio("alt1q9", ['name' => 'q9', 'value' => 'Sim']);
        $alt1q9->setLabel('Sim');
        $alt2q9 = new \Phalcon\Forms\Element\Radio("alt2q9", ['name' => 'q9', 'value' => 'Não']);
        $alt2q9->setLabel('Não');
       
        $alt1q9_1 = new Text('q9_1');

        $this->add($alt1q9);
        $this->add($alt2q9);
        $this->add($alt1q9_1);
        
        $alt1q10 = new Check('alt1q10', ['name' => 'aq10[]', 'value' => "Matriz de avaliação de valor."]);
        $alt1q10->setLabel('Matriz de avaliação de valor.');
        $alt2q10 = new Check('alt2q10', ['name' => 'aq10[]', 'value' => "Modelo das quatro ações."]);
        $alt2q10->setLabel('Modelo das quatro ações.');
        $alt3q10 = new Check('alt3q10', ['name' => 'aq10[]', 'value' => "Matriz eliminar-reduzir-elevar-criar."]);
        $alt3q10->setLabel('Matriz eliminar-reduzir-elevar-criar.');
        $alt4q10 = new Check('alt4q10', ['name' => 'aq10[]', 'value' => "Checklist de alinhamento com as três características da boa estratégia (foco, singularidade e mensagem consistente)."]);
        $alt4q10->setLabel('Checklist de alinhamento com as três características da boa estratégia (foco, singularidade e mensagem consistente).');
        $alt5q10 = new Check('alt5q10', ['name' => 'aq10[]', 'value' => "Desconheço todas essas ferramentas."]);
        $alt5q10->setLabel('Desconheço todas essas ferramentas.');
        $alt6q10 = new Check('alt6q10', ['name' => 'aq10[]', 'value' => "Utilizamos outras denominações para estas ferramentas."]);
        $alt6q10->setLabel('Utilizamos outras denominações para estas ferramentas.');

        $this->add($alt1q10);
        $this->add($alt2q10);
        $this->add($alt3q10);
        $this->add($alt4q10);
        $this->add($alt5q10);
        $this->add($alt6q10);

        $alt1q11 = new \Phalcon\Forms\Element\Radio("alt1q11", ['name' => 'q11', 'value' => 'Sim']);
        $alt1q11->setLabel('Sim');
        $alt2q11 = new \Phalcon\Forms\Element\Radio("alt2q11", ['name' => 'q11', 'value' => 'Não']);
        $alt2q11->setLabel('Não');
        $alt3q11 = new \Phalcon\Forms\Element\Radio("alt3q11", ['name' => 'q11', 'value' => 'Não sei']);
        $alt3q11->setLabel('Não sei');
       
        $alt1q11_1 = new Text('q11_1');
        $alt1q11_1->setLabel('Qual?');

        $this->add($alt1q11);
        $this->add($alt2q11);
        $this->add($alt3q11);
        $this->add($alt1q11_1);

        $alt1q12 = new \Phalcon\Forms\Element\Radio("alt1q12", ['name' => 'q12', 'value' => 'Sim']);
        $alt1q12->setLabel('Sim');
        $alt2q12 = new \Phalcon\Forms\Element\Radio("alt2q12", ['name' => 'q12', 'value' => 'Não']);
        $alt2q12->setLabel('Não');
        $alt3q12 = new \Phalcon\Forms\Element\Radio("alt3q12", ['name' => 'q12', 'value' => 'Não sei']);
        $alt3q12->setLabel('Não sei');

        $this->add($alt1q12);
        $this->add($alt2q12);
        $this->add($alt3q12);

        $alt1q13 = new \Phalcon\Forms\Element\Radio("alt1q13", ['name' => 'q13', 'value' => 'Por meio do material original da própria estratégia.']);
        $alt1q13->setLabel('Por meio do material original da própria estratégia.');
        $alt2q13 = new \Phalcon\Forms\Element\Radio("alt2q13", ['name' => 'q13', 'value' => 'Por meio de registros de ações já realizadas.']);
        $alt2q13->setLabel('Por meio de registros de ações já realizadas.');
        $alt3q13 = new \Phalcon\Forms\Element\Radio("alt3q13", ['name' => 'q13', 'value' => 'A empresa não divulga a estratégia.']);
        $alt3q13->setLabel('A empresa não divulga a estratégia.');
        $alt4q13 = new \Phalcon\Forms\Element\Radio("alt4q13", ['name' => 'q13', 'value' => 'A empresa não adota a Estratégia do Oceano Azul.']);
        $alt4q13->setLabel('A empresa não adota a Estratégia do Oceano Azul.');
        $alt5q13 = new \Phalcon\Forms\Element\Radio("alt5q13", ['name' => 'q13', 'value' => 'Não sei']);
        $alt5q13->setLabel('Não sei');

        $this->add($alt1q13);
        $this->add($alt2q13);
        $this->add($alt3q13);
        $this->add($alt4q13);
        $this->add($alt5q13);

        $alt1q14 = new \Phalcon\Forms\Element\Radio("alt1q14", ['name' => 'q14', 'value' => 'Sim']);
        $alt1q14->setLabel('Sim');
        $alt2q14 = new \Phalcon\Forms\Element\Radio("alt2q14", ['name' => 'q14', 'value' => 'Não']);
        $alt2q14->setLabel('Não');
        $alt3q14 = new \Phalcon\Forms\Element\Radio("alt3q14", ['name' => 'q14', 'value' => 'Não sei']);
        $alt3q14->setLabel('Não sei');

        $this->add($alt1q14);
        $this->add($alt2q14);
        $this->add($alt3q14);

        $alt1q15 = new \Phalcon\Forms\Element\Radio("alt1q15", ['name' => 'q15', 'value' => 'Sim']);
        $alt1q15->setLabel('Sim');
        $alt2q15 = new \Phalcon\Forms\Element\Radio("alt2q15", ['name' => 'q15', 'value' => 'Não']);
        $alt2q15->setLabel('Não');
        $alt3q15 = new \Phalcon\Forms\Element\Radio("alt3q15", ['name' => 'q15', 'value' => 'Não sei']);
        $alt3q15->setLabel('Não sei');

        $this->add($alt1q15);
        $this->add($alt2q15);
        $this->add($alt3q15);

        $alt1q16 = new \Phalcon\Forms\Element\Radio("alt1q16", ['name' => 'q16', 'value' => 'Sim']);
        $alt1q16->setLabel('Sim');
        $alt2q16 = new \Phalcon\Forms\Element\Radio("alt2q16", ['name' => 'q16', 'value' => 'Não']);
        $alt2q16->setLabel('Não');
        $alt3q16 = new \Phalcon\Forms\Element\Radio("alt3q16", ['name' => 'q16', 'value' => 'Não sei']);
        $alt3q16->setLabel('Não sei');

        $this->add($alt1q16);
        $this->add($alt2q16);
        $this->add($alt3q16);

        $alt1q17 = new \Phalcon\Forms\Element\Radio("alt1q17", ['name' => 'q17', 'value' => 'Sim']);
        $alt1q17->setLabel('Sim');
        $alt2q17 = new \Phalcon\Forms\Element\Radio("alt2q17", ['name' => 'q17', 'value' => 'Não']);
        $alt2q17->setLabel('Não');

        $this->add($alt1q17);
        $this->add($alt2q17);

        $alt1q18 = new \Phalcon\Forms\Element\Radio("alt1q18", ['name' => 'q18', 'value' => 'Concordo']);
        $alt1q18->setLabel('Concordo');
        $alt2q18 = new \Phalcon\Forms\Element\Radio("alt2q18", ['name' => 'q18', 'value' => 'Não tenho opinião']);
        $alt2q18->setLabel('Não tenho opinião');
        $alt3q18 = new \Phalcon\Forms\Element\Radio("alt3q18", ['name' => 'q18', 'value' => 'Discordo']);
        $alt3q18->setLabel('Discordo');

        $this->add($alt1q18);
        $this->add($alt2q18);
        $this->add($alt3q18);


    }
}