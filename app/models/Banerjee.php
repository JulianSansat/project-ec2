<?php

class Banerjee extends \Phalcon\Mvc\Model
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
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $guest_id;

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
    public $q3;

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
    protected $q5;

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
    public $q7_1;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q7_2;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q7_3;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q7_4;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q7_5;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q7_6;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q8;

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
    public $q10;

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
    public $q12;

    public function setQ5($q5){
        $this->q5 = $q5;
        return $this;
    }
    public function getQ5(){
        return $this->q5;
    }
    public function getGuest(){
        return Guests::findFirst($this->Guests);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("projeto_pesquisa_db");
        $this->belongsTo('banerjee_id', 'Guests', 'id', array('alias' => 'Guests'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'banerjee';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Banerjee[]|Banerjee
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Banerjee
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
