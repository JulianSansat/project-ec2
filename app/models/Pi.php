<?php

class Pi extends \Phalcon\Mvc\Model
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
    protected $q4;

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
    public $q7;

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
    public $q10_1;

    /**
     * Initialize method for model.
     */
    public function setQ4($q4){
        $this->q4 = $q4;
        return $this;
    }
    public function getQ4(){
        return $this->q4;
    }
    public function getGuest(){
        return Guests::findFirst($this->Guests);
    }

    public function initialize()
    {
        $this->setSchema("projeto_pesquisa_db");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pi';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pi[]|Pi
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pi
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
