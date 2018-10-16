<?php

class Student3 {

    //private
    private $firstName;
    private $lastName;

    public function __construct ()
    {
        $this ->firstName = 'Richard ';
        $this ->lastName = ' Wafula';
    }

    public function getFirstName()
    {
        return $this -> firstName;
    }

    public function getLastName ()
    {
        return $this->lastName;
    }
}

$mwanafunzi = new Student3('Richard');

// We try to access a private property from outside the class.
//$mercedes -> model = "Mercedes benz";
echo $mwanafunzi -> getFirstName () ;
echo $mwanafunzi -> getLastName ();



//class Student {
//
//    //the private access modifier denies access to the method from outside the class’s scope
//    private $firstName;
//    private $lastName;
//
//    //the public access modifier allows the access to the method from outside the class
//    public function setFirstName ($firstName)
//    {
//        $this -> firstName = $firstName;
//    }
//
//    public function setLastName ($lastName)
//    {
//        $this->lastName = $lastName;
//    }
//
//    public function getFirstName ()
//    {
//        return $this->firstName;
//    }
//
//    public function getLastName ()
//    {
//        return $this->lastName;
//    }
//}
//
//$mwanafunzi = new Student();
//
////Sets the students' name
//$mwanafunzi -> setFirstName("Richard");
//$mwanafunzi ->setLastName ("Wafula");
//
////Gets the the first & last name
//
//echo $mwanafunzi -> getFirstName() ;
////echo $mwanafunzi -> setLastName() ;