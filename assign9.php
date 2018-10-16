<?php

class Student9 {

    //private
    public $firstName;
    private $lastName;
    protected $studentId;

    public function __construct ()
    {
        $this ->firstName = 'Richard ';
        $this ->lastName = ' Wafula';
        $this -> studentId = 'CCIE.18';
    }

    public function getFirstName()
    {
        return $this -> firstName;
    }

    public function getLastName ()
    {
        return $this->lastName;
    }

    final public function getStudentId ()
    {
        return $this->studentId;
    }
}


$mwanafunzi = new Student9('Richard');

// We try to access a private property from outside the class.
//$mercedes -> model = "Mercedes benz";
echo $mwanafunzi -> getFirstName () ;
echo $mwanafunzi -> getLastName (). "<br>";

//child class
class ClassRep extends Student9 {
    private $phoneNumber;
    private $feeDetails;

//    public function __construct ()
//    {
//        $this -> firstName ='CarlMax';
//        $this -> phoneNumber = 123;
//        $this -> feeDetails = 'paid';
//    }


    public function getPhoneNumber ()
    {
        return $this->phoneNumber;
    }

    public function getFeeDetails ()
    {
        return $this->feeDetails;
    }
}

$represent = new ClassRep ('CarlMax');

//echo $represent ->firstName (). "<br>";
echo $represent ->getStudentId (). "<br>";
echo $represent ->getPhoneNumber (). "<br>";
echo $represent ->getFeeDetails ();



