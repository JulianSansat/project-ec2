<?php

class BanerjeeSecond extends \Phalcon\Mvc\Model
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
    public $q20_1;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q21;

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
        return 'banerjee_second';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return BanerjeeSecond[]|BanerjeeSecond
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return BanerjeeSecond
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
