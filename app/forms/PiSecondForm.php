<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\PresenceOf;

class PiSecondForm extends Form
{

    public function initialize($entity = null, $options = null)
    {

        $alt1q11 = new \Phalcon\Forms\Element\Radio("alt1q11", ['name' => 'q11', 'value' => 'Concordo']);
        $alt1q11->setLabel('Concordo'); 
        
        $alt2q11 = new \Phalcon\Forms\Element\Radio("alt2q11", ['name' => 'q11', 'value' => 'Não tenho opinião']);
        $alt2q11->setLabel('Não tenho opinião');

        $alt3q11 = new \Phalcon\Forms\Element\Radio("alt3q11", ['name' => 'q11', 'value' => 'Discordo']);
        $alt3q11->setLabel('Discordo');
        
        $this->add($alt1q11);
        $this->add($alt2q11);
        $this->add($alt3q11);

        $alt1q12 = new \Phalcon\Forms\Element\Radio("alt1q12", ['name' => 'q12', 'value' => 'Concordo']);
        $alt1q12->setLabel('Concordo'); 
        
        $alt2q12 = new \Phalcon\Forms\Element\Radio("alt2q12", ['name' => 'q12', 'value' => 'Não tenho opinião']);
        $alt2q12->setLabel('Não tenho opinião');

        $alt3q12 = new \Phalcon\Forms\Element\Radio("alt3q12", ['name' => 'q12', 'value' => 'Discordo']);
        $alt3q12->setLabel('Discordo');
        
        $this->add($alt1q12);
        $this->add($alt2q12);
        $this->add($alt3q12);

        $alt1q13 = new \Phalcon\Forms\Element\Radio("alt1q13", ['name' => 'q13', 'value' => 'Concordo']);
        $alt1q13->setLabel('Concordo'); 
        
        $alt2q13 = new \Phalcon\Forms\Element\Radio("alt2q13", ['name' => 'q13', 'value' => 'Não tenho opinião']);
        $alt2q13->setLabel('Não tenho opinião');

        $alt3q13 = new \Phalcon\Forms\Element\Radio("alt3q13", ['name' => 'q13', 'value' => 'Discordo']);
        $alt3q13->setLabel('Discordo');
        
        $this->add($alt1q13);
        $this->add($alt2q13);
        $this->add($alt3q13);

        $alt1q14 = new \Phalcon\Forms\Element\Radio("alt1q14", ['name' => 'q14', 'value' => 'Concordo']);
        $alt1q14->setLabel('Concordo'); 
        
        $alt2q14 = new \Phalcon\Forms\Element\Radio("alt2q14", ['name' => 'q14', 'value' => 'Não tenho opinião']);
        $alt2q14->setLabel('Não tenho opinião');

        $alt3q14 = new \Phalcon\Forms\Element\Radio("alt3q14", ['name' => 'q14', 'value' => 'Discordo']);
        $alt3q14->setLabel('Discordo');
        
        $this->add($alt1q14);
        $this->add($alt2q14);
        $this->add($alt3q14);

        $alt1q15 = new \Phalcon\Forms\Element\Radio("alt1q15", ['name' => 'q15', 'value' => 'Concordo']);
        $alt1q15->setLabel('Concordo'); 
        
        $alt2q15 = new \Phalcon\Forms\Element\Radio("alt2q15", ['name' => 'q15', 'value' => 'Não tenho opinião']);
        $alt2q15->setLabel('Não tenho opinião');

        $alt3q15 = new \Phalcon\Forms\Element\Radio("alt3q15", ['name' => 'q15', 'value' => 'Discordo']);
        $alt3q15->setLabel('Discordo');
        
        $this->add($alt1q15);
        $this->add($alt2q15);
        $this->add($alt3q15);

        $alt1q16 = new \Phalcon\Forms\Element\Radio("alt1q16", ['name' => 'q16', 'value' => 'Concordo']);
        $alt1q16->setLabel('Concordo'); 
        
        $alt2q16 = new \Phalcon\Forms\Element\Radio("alt2q16", ['name' => 'q16', 'value' => 'Não tenho opinião']);
        $alt2q16->setLabel('Não tenho opinião');

        $alt3q16 = new \Phalcon\Forms\Element\Radio("alt3q16", ['name' => 'q16', 'value' => 'Discordo']);
        $alt3q16->setLabel('Discordo');
        
        $this->add($alt1q16);
        $this->add($alt2q16);
        $this->add($alt3q16);

        $alt1q17 = new Check("alt1q17", ['name' => 'aq17[]', 'value' => 'Mecanismos “push” (Mecanismos que subsidiam pesquisadores e instituições sem a necessidade de sucesso)']);
        $alt1q17->setLabel('Mecanismos “push” (Mecanismos que subsidiam pesquisadores e instituições sem a necessidade de sucesso)');
        $alt2q17 = new Check("alt2q17", ['name' => 'aq17[]', 'value' => 'Mecanismos “pull” (Mecanismos que se comprometem a recompensar o sucesso)']);
        $alt2q17->setLabel('Mecanismos “pull” (Mecanismos que se comprometem a recompensar o sucesso)');
        $alt3q17 = new Check("alt3q17", ['name' => 'aq17[]', 'value' => 'Pesquisas abertas e colaborativas']);
        $alt3q17->setLabel('Pesquisas abertas e colaborativas');
        $alt4q17 = new Check("alt4q17", ['name' => 'aq17[]', 'value' => 'Polarização']);
        $alt4q17->setLabel('Polarização');
        $alt5q17 = new Check("alt5q17", ['name' => 'aq17[]', 'value' => 'Parcerias entre os setores públicos e privados para o desenvolvimento de produtos']);
        $alt5q17->setLabel('Parcerias entre os setores públicos e privados para o desenvolvimento de produtos');
        $alt6q17 = new Check("alt6q17", ['name' => 'aq17[]', 'value' => 'Outro']);
        $alt6q17->setLabel('Outro');
        $alt7q17 = new Check("alt7q17", ['name' => 'aq17[]', 'value' => 'Não sei']);
        $alt7q17->setLabel('Não sei');

        $alt1q17_1 = new Text('q17_1');
        $alt1q17_1->setLabel('Qual?');


        $this->add($alt1q17);
        $this->add($alt2q17);
        $this->add($alt3q17);
        $this->add($alt4q17);
        $this->add($alt5q17);
        $this->add($alt6q17);
        $this->add($alt7q17);
        $this->add($alt1q17_1);

        $alt1q18 = new \Phalcon\Forms\Element\Radio("alt1q18", ['name' => 'q18', 'value' => 'Sim']);
        $alt1q18->setLabel('Sim');
        $alt2q18 = new \Phalcon\Forms\Element\Radio("alt2q18", ['name' => 'q18', 'value' => 'Não']);
        $alt2q18->setLabel('Não');
        $alt3q18 = new \Phalcon\Forms\Element\Radio("alt3q18", ['name' => 'q18', 'value' => 'Não sei']);
        $alt3q18->setLabel('Não sei');

        $this->add($alt1q18);
        $this->add($alt2q18);
        $this->add($alt3q18);

        $alt1q19 = new \Phalcon\Forms\Element\Radio("alt1q19", ['name' => 'q19', 'value' => 'Sim']);
        $alt1q19->setLabel('Sim');
        $alt2q19 = new \Phalcon\Forms\Element\Radio("alt2q19", ['name' => 'q19', 'value' => 'Não']);
        $alt2q19->setLabel('Não');
        $alt3q19 = new \Phalcon\Forms\Element\Radio("alt3q19", ['name' => 'q19', 'value' => 'Não sei']);
        $alt3q19->setLabel('Não sei');

        $this->add($alt1q19);
        $this->add($alt2q19);
        $this->add($alt3q19);

        $alt1q20 = new \Phalcon\Forms\Element\Radio("alt1q20", ['name' => 'q20', 'value' => 'Sim']);
        $alt1q20->setLabel('Sim');
        $alt2q20 = new \Phalcon\Forms\Element\Radio("alt2q20", ['name' => 'q20', 'value' => 'Não']);
        $alt2q20->setLabel('Não');
        $alt3q20 = new \Phalcon\Forms\Element\Radio("alt3q20", ['name' => 'q20', 'value' => 'Não sei']);
        $alt3q20->setLabel('Não sei');

        $this->add($alt1q20);
        $this->add($alt2q20);
        $this->add($alt3q20);

        $alt1q21 = new \Phalcon\Forms\Element\Radio("alt1q21", ['name' => 'q21', 'value' => 'Sim']);
        $alt1q21->setLabel('Sim');
        $alt2q21 = new \Phalcon\Forms\Element\Radio("alt2q21", ['name' => 'q21', 'value' => 'Não']);
        $alt2q21->setLabel('Não');
       
        $alt1q21_1 = new Text('q21_1');
        $alt1q21_1->setLabel('Qual?');

        $this->add($alt1q21);
        $this->add($alt2q21);
        $this->add($alt1q21_1);

    }
}