<?php

class PiSecond extends \Phalcon\Mvc\Model
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
    public $q11;

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
    protected $q17;

    public $q17_1;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q18;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q19;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q20;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q21;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q21_1;

    public function setQ17($q17){
        $this->q17 = $q17;
        return $this;
    }
    public function getQ17(){
        return $this->q17;
    }

    /**
     * Initialize method for model.
     */
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
        return 'pi_second';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PiSecond[]|PiSecond
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PiSecond
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
