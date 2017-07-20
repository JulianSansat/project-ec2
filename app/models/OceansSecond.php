<?php

class OceansSecond extends \Phalcon\Mvc\Model
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
    public $q22;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $q23;

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
        return 'oceans_second';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OceansSecond[]|OceansSecond
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OceansSecond
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
