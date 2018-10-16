<?php
/**
 * Created by PhpStorm.
 * User: wrx
 * Date: 07/10/2018
 * Time: 22:17
 */
class student {
    public $name;
    public $age;
    public $application;
    public $admissionNumber;


//    public function setName ($name)
//    {
//        $this->name = $name;
//    }

    public function getName ()
    {
        echo "Student Name Is: ". $this->name. "<br>";
    }

    public function getAge ()
    {
        echo "Student Age Is: ". $this->age. "<br>";
    }

    public function getAdmissionNumber ()
    {
        return $this->admissionNumber;
    }
}


$student = [
            [ 'name' => 'Richard' , 'class' => 'Evening' , 'age' => 18, 'Application' => 1, 'ADM_No' => 555 ] ,
            [ 'name' => 'Sam' , 'class' => 'Morning' , 'age' => 13, 'Application' => 0, 'ADM_No' => 557 ] ,
            [ 'name' => 'wafula' , 'class' => 'Morning' , 'age' => 21, 'Application' => 1, 'ADM_No' => 559 ] ,
           ];

foreach ( $student as $value )
    {
        $student = new student();
        $student -> name = $value ['name'];
        $student -> age = $value ['age'];
        $student ->admissionNumber = $value ['ADM_No'];
        $student -> getName ();
        $student -> getAge ();
    }

    if ($value ['age'] >18 && $value ['Application'] = 1 )
    {
        echo "Your Application is Successful. Your Admission Number is: ". $student ->getAdmissionNumber ();
    } else {
        echo "Your application is Unsuccessful";
    }
