<?php

namespace App\classes;


class Person
{
    public $district = 'Savar';
    protected $division = 'Dhaka';
    private $country = 'Bangladesh';

    public function district()
    {
        echo 'Dhaka';
    }
    protected function division(){
        echo 'Dhaka';
        echo '<br/>';
        $this->country();
    }
    private function country(){
        echo "Bangladesh";
    }
}