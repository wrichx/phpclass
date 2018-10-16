<?php
//
//class Car {
//
//    //private
//    private $model;
//
//    public function __construct ()
//    {
//        $this ->model = 'mercedes';
//    }
//
//    public function getModel()
//    {
//        return "The car model is " . $this -> model;
//    }
//}
//
//$mercedes = new Car('mercedes');
//
//// We try to access a private property from outside the class.
////$mercedes -> model = "Mercedes benz";
//echo $mercedes -> getModel();
//


class Student {

  //the private access modifier denies access to the method from outside the class’s scope
  private $firstName;
  private $lastName;

  //the public access modifier allows the access to the method from outside the class
  public function setFirstName ($firstName)
  {
    $this -> firstName = $firstName;
  }

    public function setLastName ($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getFirstName ()
    {
        return $this->firstName;
    }

    public function getLastName ()
    {
        return $this->lastName;
    }
}

$mwanafunzi = new Student();

//Sets the students' name
$mwanafunzi -> setFirstName("Richard");
$mwanafunzi ->setLastName ("Wafula");

//Gets the the first & last name

echo $mwanafunzi -> getFirstName() ;
//echo $mwanafunzi -> setLastName() ;

