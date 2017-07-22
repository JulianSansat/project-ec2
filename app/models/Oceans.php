<?php

class Oceans extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q1;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q2;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q2_1;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $q3;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q4;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q5;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q6;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q6_1;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q7;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $q8;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q9;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q9_1;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $q10;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q11;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q11_1;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q12;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q13;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q14;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q15;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q16;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q17;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q18;
    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $guest_id;

    public $Guests;

    /**
     * Initialize method for model.
     */
    
    public function setQ3($q3){
        $this->q3 = $q3;
        return $this;
    }

    public function getQ3(){
        return $this->q3;
    }

    public function setQ8($q8){
        $this->q8 = $q8;
        return $this;
    }

    public function getQ8(){
        return $this->q8;
    }

    public function setQ10($q10){
        $this->q10 = $q10;
        return $this;
    }

    public function getQ10(){
        return $this->q10;
    }

    public function getGuest(){
        return Guests::findFirst($this->Guests);
    }
    public function initialize()
    {
        $this->setSchema("projeto_pesquisa_db");
        $this->belongsTo(
            'guest_id', 
            'Guests', 'id', 
            array('alias' => 'Guests'
        ));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'oceans';
    }

}
