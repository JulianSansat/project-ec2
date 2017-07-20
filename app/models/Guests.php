<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class Guests extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=10, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $tel;

    /**
     *
     * @var string
     * @Column(type="string", length=120, nullable=false)
     */
    public $escolarship;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $age;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $study_area;

    /**
     *
     * @var string
     * @Column(type="string", length=70, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    public $ocean_id;

    public $ocean_second_id;

    public $ocean_third_id;

    public $banerjee_id;

    public $banerjee_second_id;
    
    public $banerjee_third_id;

    public $pi_id;

    public $pi_second_id;

    public $pi_third_id;

    public function getOcean(){
        return Oceans::findById($this->ocean_id);
    }

    public function getOceanSecond(){
        return OceansSecond::findById($this->ocean_second_id);
    }

    public function getOceanThird(){
        return OceansThird::findById($this->ocean_third_id);
    }

    public function getBanerjee(){
        return Banerjee::findById($this->banerjee_id);
    }

    public function getBanerjeeSecond(){
        return BanerjeeSecond::findById($this->banerjee_second_id);
    }

    public function getBanerjeeThird(){
        return BanerjeeThird::findById($this->banerjee_third_id);
    }

    public function getPi(){
        return Pi::findById($this->pi_id);
    }

    public function getPiSecond(){
        return PiSecond::findById($this->pi_second_id);
    }

    public function getPiThird(){
        return PiThird::findById($this->pi_third_id);
    }


    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("projeto_pesquisa_db");
        $this->hasOne(
            'id',
            'Oceans',
            'guest_id'
        );
        $this->hasOne(
            'id',
            'OceansSecond',
            'guest_id'
        );
        $this->hasOne(
            'id',
            'OceansThird',
            'guest_id'
        );
        $this->hasOne(
            'id',
            'Banerjee',
            'guest_id'
        );
        $this->hasOne(
            'id',
            'BanerjeeSecond',
            'guest_id'
        );
        $this->hasOne(
            'id',
            'BanerjeeThird',
            'guest_id'
        );
        $this->hasOne(
            'id',
            'Pi',
            'guest_id'
        );
        $this->hasOne(
            'id',
            'PiSecond',
            'guest_id'
        );
        $this->hasOne(
            'id',
            'PiThird',
            'guest_id'
        );
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'guests';
    }


   /**
    public function getAllOcean()
    {
        $oceanQuestions = [
        ];

        $ocean = $this->getOcean();
        if (!empty($ocean)) {
            $oceanQuestions .= [
                'q1'    => $ocean->q1, 
                'q2'    => $ocean->q2,
                'q2_1'  => $ocean->q2_1,
                'q3'    => $ocean->getQ3(),
                'q4'    => $ocean->q4,
                'q5'    => $ocean->q5,
                'q6'    => $ocean->q6,
                'q6'    => $ocean->q6_1,
                'q7'    => $ocean->getQ8(),
                'q9'    => $ocean->q9_1,
                'q10'   => $ocean->getQ10(),
                'q11'   => $ocean->q11_1,
                'q12'   => $ocean->q12,
                'q13'   => $ocean->q13,
                'q14'   => $ocean->q14,
                'q15'   => $ocean->q15,
                'q16'   => $ocean->q16,
                'q17'   => $ocean->q17,
                'q18'   => $ocean->q18,
            ];
        }

        return $oceanQuestions;
    }
    **/
}
