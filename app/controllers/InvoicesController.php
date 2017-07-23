<?php

use Phalcon\Flash;
use Phalcon\Session;
use Phalcon\Mvc\Controller;

class InvoicesController extends Controller
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        $this->tag->setTitle('Resultados');
    }

    public function indexAction()
    {
        
        $oceans = Oceans::find();
        $oceansSecond = OceansSecond::find();
        $oceansThird = OceansThird::find();
        $banerjees = Banerjee::find();
        $banerjeesSecond = BanerjeeSecond::find();
        $banerjeesThird = BanerjeeThird::find();
        $pis = Pi::find();
        $pisSecond = PiSecond::find();
        $pisThird = PiThird::find();

        $respostas = [];
        $graficos= [];
        $altresp = [];
        $categorias = [];
        foreach ($oceans as $ocean) {
            $respostas['q1'][] = $ocean->q1; 
            $respostas['q2'][] = $ocean->q2;
            $respostas['q2_1'][] = $ocean->q2_1; 
            $respostas['q3'][] = $ocean->q3; 
            $respostas['q4'][] = $ocean->q4; 
            $respostas['q5'][] = $ocean->q5; 
            $respostas['q6'][] = $ocean->q6; 
            $respostas['q6_1'][] = $ocean->q6_1; 
            $respostas['q7'][] = $ocean->q7; 
            $respostas['q8'][] = $ocean->q8; 
            $respostas['q9'][] = $ocean->q9; 
            $respostas['q9_1'][] = $ocean->q9_1; 
            $respostas['q10'][] = $ocean->q10; 
            $respostas['q11'][] = $ocean->q11; 
            $respostas['q11_1'][] = $ocean->q11_1; 
            $respostas['q12'][] = $ocean->q12; 
            $respostas['q13'][] = $ocean->q13; 
            $respostas['q14'][] = $ocean->q14; 
            $respostas['q15'][] = $ocean->q15; 
            $respostas['q16'][] = $ocean->q16; 
            $respostas['q17'][] = $ocean->q17; 
            $respostas['q18'][] = $ocean->q18;
        }

        foreach ($oceansSecond as $oceanSecond) {
            $respostas['q19'][] = $oceanSecond->q19; 
            $respostas['q20'][] = $oceanSecond->q20;
            $respostas['q21'][] = $oceanSecond->q21; 
            $respostas['q22'][] = $oceanSecond->q22; 
            $respostas['q23'][] = $oceanSecond->q23; 
        }

        foreach ($oceansThird as $oceanThird) {
            $respostas['q24'][] = $oceanThird->q24; 
            $respostas['q25'][] = $oceanThird->q25;
            $respostas['q26'][] = $oceanThird->q26; 
            $respostas['q27'][] = $oceanThird->q27; 
            $respostas['q28'][] = $oceanThird->q28;
            $respostas['q29'][] = $oceanThird->q29; 
            $respostas['q30'][] = $oceanThird->q30; 
        }

        foreach ($banerjees as $banerjee) {
            $respostas['q31'][] = $banerjee->q1; 
            $respostas['q32'][] = $banerjee->q2;
            $respostas['q33'][] = $banerjee->q3; 
            $respostas['q34'][] = $banerjee->q4; 
            $respostas['q35'][] = $banerjee->q5; 
            $respostas['q36'][] = $banerjee->q6; 
            $respostas['q37'][] = $banerjee->q7_1; 
            $respostas['q37_1'][] = $banerjee->q7_2; 
            $respostas['q37_2'][] = $banerjee->q7_3; 
            $respostas['q37_4'][] = $banerjee->q7_4; 
            $respostas['q37_5'][] = $banerjee->q7_5; 
            $respostas['q37_6'][] = $banerjee->q7_6; 
            $respostas['q38'][] = $banerjee->q8; 
            $respostas['q39'][] = $banerjee->q9; 
            $respostas['q40'][] = $banerjee->q10; 
            $respostas['q41'][] = $banerjee->q11; 
            $respostas['q42'][] = $banerjee->q12;
        }

        foreach ($banerjeesSecond as $banerjeeSecond) {
            $respostas['q43'][] = $banerjeeSecond->q13; 
            $respostas['q44'][] = $banerjeeSecond->q14;
            $respostas['q45'][] = $banerjeeSecond->q15; 
            $respostas['q46'][] = $banerjeeSecond->q16; 
            $respostas['q47'][] = $banerjeeSecond->q17; 
            $respostas['q48'][] = $banerjeeSecond->q18; 
            $respostas['q49'][] = $banerjeeSecond->q19; 
            $respostas['q50'][] = $banerjeeSecond->q20; 
            $respostas['q50_1'][] = $banerjeeSecond->q20_1; 
            $respostas['q51'][] = $banerjeeSecond->q21;
        }

        foreach ($banerjeesThird as $banerjeeThird) {
            $respostas['q52'][] = $banerjeeThird->q22; 
            $respostas['q53'][] = $banerjeeThird->q23;
            $respostas['q54'][] = $banerjeeThird->q24; 
            $respostas['q55'][] = $banerjeeThird->q25; 
            $respostas['q56'][] = $banerjeeThird->q26; 
            $respostas['q56_1'][] = $banerjeeThird->q26_1; 
            $respostas['q57'][] = $banerjeeThird->q27; 
            $respostas['q58'][] = $banerjeeThird->q28; 
            $respostas['q59'][] = $banerjeeThird->q29; 
            $respostas['q60'][] = $banerjeeThird->q30;
            $respostas['q61'][] = $banerjeeThird->q31;
        }

        foreach ($pis as $pi) {
            $respostas['q62'][] = $pi->q1; 
            $respostas['q63'][] = $pi->q2;
            $respostas['q64'][] = $pi->q3; 
            $respostas['q65'][] = $pi->q4; 
            $respostas['q66'][] = $pi->q5; 
            $respostas['q67'][] = $pi->q6; 
            $respostas['q68'][] = $pi->q7; 
            $respostas['q69'][] = $pi->q8; 
            $respostas['q70'][] = $pi->q9; 
            $respostas['q71'][] = $pi->q10;
            $respostas['q71_1'][] = $pi->q10_1;
        }

        foreach ($pisSecond as $piSecond) {
            $respostas['q72'][] = $piSecond->q11; 
            $respostas['q73'][] = $piSecond->q12;
            $respostas['q74'][] = $piSecond->q13; 
            $respostas['q75'][] = $piSecond->q14; 
            $respostas['q76'][] = $piSecond->q15; 
            $respostas['q77'][] = $piSecond->q16; 
            $respostas['q78'][] = $piSecond->q17; 
            $respostas['q78_1'][] = $piSecond->q17_1; 
            $respostas['q79'][] = $piSecond->q18; 
            $respostas['q80'][] = $piSecond->q19;
            $respostas['q81'][] = $piSecond->q20;
            $respostas['q82'][] = $piSecond->q21;
            $respostas['q82_1'][] = $piSecond->q21_1;
        }

        foreach ($pisThird as $piThird) {
            $respostas['q83'][] = $piThird->q22; 
            $respostas['q84'][] = $piThird->q23;
            $respostas['q85'][] = $piThird->q24; 
            $respostas['q86'][] = $piThird->q25; 
            $respostas['q87'][] = $piThird->q26; 
            $respostas['q88'][] = $piThird->q27; 
            $respostas['q89'][] = $piThird->q28; 
            $respostas['q90'][] = $piThird->q29; 
            $respostas['q91'][] = $piThird->q30;
        }
        
        foreach ($respostas as $key => $resposta){
            $aux = array_filter($resposta);
            $vals = array_count_values($aux);
            $name = [];
            $data = [];
            $i = 0;
            foreach ($vals as $k => $val){
                $data[$i]['name'] = $k;
                $data[$i]['data'] = [$val];
                $i++;
            }
            $graficos[$key]['series'] = $data;
            $graficos[$key]['titulo'] = $key; 
        }


        /*$graficos['q1']['titulo'] = 'Como você avalia o seu conhecimento sobre a Estratégia do Oceano Azul (EOA)?';
        $graficos['q2']['titulo'] = 'Você teve acesso a algum material sobre a Estratégia do Oceano Azul?';
        $graficos['q2_1']['titulo'] = 'Com base no que você teve acesso, você acredita ser possível a implementação da Estratégia do Oceano Azul em uma instituição (empresa pública ou privada, e ICT) apenas com o estudo do livro?';
        $graficos['q3']['titulo'] = 'O que a Estratégia do Oceano Azul pode gerar em uma companhia? Escolher quantas opções julgar necessárias.';
        $graficos['q4']['titulo'] = 'Qual você acredita ser a prática adotada pela Estratégia do Oceano Azul?'; 
        $graficos['q5']['titulo'] = 'O que você entende por inovação de valor?'; 
        $graficos['q6']['titulo'] = 'Você tem conhecimento de alguma inovação de valor (em qualquer setor) gerada a partir da Estratégia do Oceano Azul?'; 
        $graficos['q6_1']['titulo'] = 'Qual?'; 
        $graficos['q7']['titulo'] = 'A Estratégia do Oceano Azul é uma abordagem utilizada, atualmente, na instituição na qual você trabalha?'; 
        $graficos['q8']['titulo'] = 'Dos princípios apresentados a seguir (conforme denominação original de Kim e Mauborgne, 2005), quais deles a empresa na qual você trabalha utiliza para a implementação da Estratégia do Oceano Azul? (Leia todos antes de assinalar)'; 
        $graficos['q9']['titulo'] = 'Você conhece alguma ferramenta abordada na Estratégia do Oceano Azul?'; 
        $graficos['q9_1']['titulo'] = 'Qual/Quais?'; 
        $graficos['q10']['titulo'] = 'Das ferramentas apresentadas a seguir (conforme denominação original de Kim e Mauborgne, 2005), quais delas são/foram empregadas na sua empresa visando o desenvolvimento e aplicação da Estratégia do Oceano Azul? (Leia todas antes de assinalar)'; 
        $graficos['q11']['titulo'] = 'Considerando a sua empresa, foi encontrada alguma dificuldade na implementação e execução da Estratégia do Oceano Azul?'; 
        $graficos['q11_1']['titulo'] = 'Qual foi a dificuldade encontrada?'; 
        $graficos['q12']['titulo'] = 'A instituição na qual você trabalha inclui todos os funcionários dela na elaboração de estratégias?'; 
        $graficos['q13']['titulo'] = 'Como a instituição na qual você trabalha dissemina a Estratégia do Oceano Azul?'; 
        $graficos['q14']['titulo'] = 'A instituição na qual você trabalha adota estratégias distintas para inovação de valor (oceano azul) e competição (oceano vermelho)?'; 
        $graficos['q15']['titulo'] = 'Na instituição na qual você trabalha, as oportunidades de desenvolvimento de novos produtos são necessárias para a definição das estratégias?'; 
        $graficos['q16']['titulo'] = 'Você considera válida a aplicação da Estratégia do Oceano azul em esferas públicas?'; 
        $graficos['q17']['titulo'] = 'Conhece alguma aplicação da Estratégia do Oceano Azul na área da saúde?'; 
        $graficos['q18']['titulo'] = 'Você concorda com a seguinte afirmação: criar um oceano azul na área da saúde está mais relacionado com o que o paciente não precisa do que com o que ele precisa. Reduzir gastos e elevar a entrega de serviços é fundamental.';
        $graficos['q19']['titulo'] = 'Processos de registros burocráticos e repetitivos geram gastos de tempo para o paciente e podem ser reduzidos.'; 
        $graficos['q20']['titulo'] = 'q20';
        $graficos['q21']['titulo'] = 'q21';
        $graficos['q22']['titulo'] = 'q22'; 
        $graficos['q23']['titulo'] = 'q23';
        $graficos['q24']['titulo'] = 'q24'; 
        $graficos['q25']['titulo'] = 'q25';
        $graficos['q26']['titulo'] = 'q26';
        $graficos['q27']['titulo'] = 'q27'; 
        $graficos['q28']['titulo'] = 'q28';
        $graficos['q29']['titulo'] = 'q29';
        $graficos['q30']['titulo'] = 'q30';
        $graficos['q31']['titulo'] = 'q31';
        $graficos['q32']['titulo'] = 'q32';        
        $graficos['q33']['titulo'] = 'q33';
        $graficos['q42']['titulo'] =*/  




        $titulos =[];
        foreach ($graficos as $key => $grafico){
            $titulos[] = $grafico['titulo'];
        }
        $this->view->graficos = $graficos;
        $this->view->graficosjs = json_encode($graficos);
        $comma_separated = json_encode($titulos);
        $this->view->titulos = $titulos;
        $this->view->comma_separated = $comma_separated;
        
    }

    /**
     * Edit the active user profile
     *
     */
    public function profileAction()
    {
        //Get session info
        $guests = Guests::find();
        $oceans = [];
        $oceansSecond = [];
        $oceansThird = [];
        $banerjee = [];
        $banerjeeSecond = [];
        $banerjeeThird = [];
        $pi = [];
        $piSecond = [];
        $piThird = [];
        foreach ($guests as $guest) {
            $oceans[] = $guest->getOcean();
            $oceansSecond[] = $guest->getOceanSecond();
            $oceansThird[] = $guest->getOceanThird();
            $banerjee[] = $guest->getBanerjee();
            $banerjeeSecond[] = $guest->getBanerjeeSecond();
            $banerjeeThird[] = $guest->getBanerjeeThird();
            $pi[] = $guest->getPi();
            $piSecond[] = $guest->getPiSecond();
            $piThird[] = $guest->getPiThird();
        }

        $this->view->guests = $guests;
        $this->view->oceans = $oceans;
        $this->view->oceansSecond = $oceansSecond;
        $this->view->oceansThird = $oceansThird;
        $this->view->banerjee = $banerjee;
        $this->view->banerjeeSecond = $banerjeeSecond;
        $this->view->banerjeeThird = $banerjeeThird;
        $this->view->pi = $pi;
        $this->view->piSecond = $piSecond;
        $this->view->piThird = $piThird;
        
        $auth = $this->session->get('auth');
        //Query the active user
        $user = Users::findFirst($auth['id']);
        if ($user == false) {
            return $this->dispatcher->forward(
                [
                    "controller" => "index",
                    "action"     => "index",
                ]
            );
        }

        if (!$this->request->isPost()) {
            $this->tag->setDefault('name', $user->name);
            $this->tag->setDefault('email', $user->email);
        } else {

            $name = $this->request->getPost('name', array('string', 'striptags'));
            $email = $this->request->getPost('email', 'email');

            $user->name = $name;
            $user->email = $email;
            if ($user->save() == false) {
                foreach ($user->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $this->flash->success('Your profile information was updated successfully');
            }
        }
    }
}
