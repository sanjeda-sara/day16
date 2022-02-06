<?php


namespace App\classes;
use App\classes\Person;

class Example extends Person
{
    public $firstName;
    protected $middleName;
    private $lastName;
    public $firstNumber= 10;
    protected $secondNumber = 20;
    private $lastNumber = 30 ;

    public function index()
    {
        //echo "Hello World";
        //property calling using own class object:
        //echo $this->firstName ;

        $this->firstName="Hera";
        $this->firstName="Shormi";

        $x = 'bd';
        $x = 10;
        $x = 10.00;
        $x = true;
        //echo gettype($this->firstName);
        //echo gettype($x);
        $this->firstName='Sanjeda';
        echo $this->firstName;
    }
    public function methodOne()
    {
        $this->middleName = 'Sara';
        echo $this->middleName;
    }
    public function methodTwo()
    {
        $this->lastName = 'Jennifer';
        echo $this->lastName;
    }
    public function methodThree()
    {
        echo $this->district;
        echo $this->division;
        //echo $this->country;

       // $this->district();
        $this->division();
        //$this->country();
    }


}