<?php
/**
 * Created by PhpStorm.
 * User: wrx
 * Date: 08/10/2018
 * Time: 22:30
 */
class fruits
{
    public $type;
    public $is_juicy;
    public $colour;
    public $price;


    public function getType ()
    {
        return $this->type;
    }

    public function getisJuicy ()
    {
        return $this->is_juicy;
    }

    public function getColour ()
    {
        return $this->colour;
    }

    final public function getPrice ($value)
    {
        if ($value >=50)
        {
            return $this->price;
        } else {
            return 'The value is too low';
        }
    }
}

$fruits_array =[
    ['type'=>'mango', 'is_juicy'=>1, 'colour'=>'yellow', 'price'=>30],
    ['type'=>'orange', 'is_juicy'=>1, 'colour'=>'red', 'price'=>50],
    ['type'=>'apple', 'is_juicy'=>0, 'colour'=>'green', 'price'=>70],
    ['type'=>'berries', 'is_juicy'=>0, 'colour'=>'purple', 'price'=>90],
    ['type'=>'guava', 'is_juicy'=>1, 'colour'=>'blue', 'price'=>110],
];

foreach ($fruits_array as $fruit)
{
    $fruits_array = new fruits();
    $fruits_array -> type = $fruit ['type'];
    $fruits_array -> is_juicy = $fruit ['is_juicy'];
    $fruits_array -> colour = $fruit ['colour'];
    $fruits_array -> price = $fruit ['price'];

}

class fruitSalad extends fruits
{
    private $is_citrus;
    protected $exported;

    public function __construct ($is_citrus)
    {
       $this->is_citrus = $is_citrus;
    }


    public function getCitrusLevel ()
    {
        return $this->is_citrus;
        if ($is_citrus = 1){
            echo "This will make bad Salad";
        }else{
            echo "Add to Fruit Salad menu";
        }
    }
}