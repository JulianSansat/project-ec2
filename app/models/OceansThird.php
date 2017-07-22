<?php

class OceansThird extends \Phalcon\Mvc\Model
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
    public $q24;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q25;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q26;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q27;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q28;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q29;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q30;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $guest_id;

    /**
     * Initialize method for model.
     */
    public function getGuest(){
        return Guests::findFirst($this->Guests);
    }
    public function initialize()
    {
        $this->setSchema("projeto_pesquisa_db");
        $this->belongsTo(
            'ocean_id',
            'Guests',
            'id'
        );
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'oceans_third';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OceansThird[]|OceansThird
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OceansThird
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
