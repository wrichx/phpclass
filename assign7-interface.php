<?php
/**
 * Created by PhpStorm.
 * User: wrx
 * Date: 16/10/2018
 * Time: 15:43
 */
interface details {
    public function getDetails ();
}

interface rent {
    public function getRent ();
}

class studio implements details, rent {
    private $name;
    private $contact;
    private $period;
    private $amount;

    public function __construct ($name, $contact, $period, $amount)
    {
        $this->name = $name;
        $this->contact = $contact;
        $this->period = $period;
        $this->amount = $amount;
    }

    public function getDetails ()
    {
        return "Tenant name: ". $this ->name. "<br>".  "Tenant contact: ". $this->contact. "<br>";
    }

    public function getRent ()
    {
        return "Rent Payable: ". $this->period * $this->amount;
    }
}

function showDetails (details $details) {
    return $details->getDetails ();
}

function calculateRent (rent $rent ){
    return $rent->getRent ();
}

echo showDetails (new studio('Richard Wafula', '0733810714', 1, 15000));
echo calculateRent (new studio('Richard Wafula', '0733810714', 2, 15000));