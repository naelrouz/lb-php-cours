<?php
//namespace  'lb-php-cource/source';
/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 24/05/2016
 * Time: 09:10
 */
class Man
{
    private $name;
    protected $age;

 function __construct($age, $name)
 {
     $this->age = $age;
     $this->name = $name;
    echo '<p></p>Object <b>'. __CLASS__.' class</b> is create.</p>';
 }

    public function getInfo()
    {
        echo $this->age;
        echo $this->name;
    }
}