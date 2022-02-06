<?php


namespace App\classes;


class Operator
{
//  ======= OPERATOR =========
//        ***Arithmatic Operator:
//                Binary Operator (+, -, *, /, %)
//                Unary Operator (++, --, (-))
//        ***Assignment Operator (=, +=, -=, *=, /=, %=, =)
//        *** Conditional Operator (>, >=, <. <=, ==, !=, ===, !===  )
//        ***Logical Operator (&&, ||, !)

    public $firstNumber;
    public $lastNumber;

    public $x ;
    public $y ;
    protected $z;

    public function index()
    {
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;

//=================     STATEMENT    ====================
//    **SINGLE LINE STATEMENT
//    **CONDITIONAL STATEMENT
//            *if
//            *if-else
//            *if else if
//            *switch
//    **Repeated Statement
//            *for
//            *while
//            *do while
//            *foreach
//    **ARRAY

        //==================SWITCH STARTS====================
        switch ($this->y){
            case 10:
                echo "hello world";
                break;
            case 20:
                echo "hello bitm";
                break;
            case 30:
                echo "hello bangladesh";
                break;
            default:
                echo 'byeeeeeeeeeee';
        }
        //==================SWITCH ENDS======================

//=====================================================================

//    if ($this->x < $this->y)
//    {
//        echo 'Its True';
//
//    }
//echo ($this->x < $this->y) && ($this->y > $this->z);

//        if (($this->x < $this->y) && ($this->y < $this->z)){
//            echo "true";
//        }

        if ($this->x > $this->y)
        {
            echo 'hello bitm';
        }
        elseif($this->y > $this->z)
        {
            echo 'blingbling';
        }
        elseif($this->z > $this->x)
        {
            echo 'blingbling';
        }
        else{
            echo 'bidaay';
        }


//=================LOGICAL and CONDITIONAL STARTS====================
        echo '<br/>_______________________________________________<br/>';
        echo ($this->x < $this->y) && ($this->y > $this->z);
        echo ($this->x > $this->y) || ($this->y > $this->z);
        echo '<br/>......<br/>';
        echo ($this->x > $this->y) || ($this->y < $this->z);
        echo '<br/>......<br/>';
        echo ($this->x < $this->y) || ($this->y > $this->z);
        echo '<br/>......<br/>';
        echo ($this->x < $this->y) || ($this->y < $this->z);
        echo '<br/>..................and operator...................<br/>';
        echo ($this->x < $this->y) && ($this->y < $this->z);
        echo '<br/>......<br/>';
        echo ($this->x > $this->y) && ($this->y < $this->z);
        echo '<br/>......<br/>';
        echo ($this->x < $this->y) && ($this->y > $this->z);
        echo '<br/>......<br/>';
        echo ($this->x < $this->y) && ($this->y < $this->z);
        echo '<br/>......<br/>';
        echo ($this->x < $this->y) && ($this->y > $this->z);

//==================LOGICAL and CONDITIONAL ENDS======================

//        echo $this->x += $this->y;
//        echo '<br/>';
//        echo $this->x -= $this->y;
//        echo '<br/>';
//        echo $this->x *= $this->y;
//        echo '<br/>';
//        echo $this->x /= $this->y;
//        echo '<br/>';
//        echo $this->x %= $this->y;
//        echo '<br/>';
//        echo $this->x .= $this->y;
//        echo '<br/>';

//        echo $this->x++; //prints first, then ++, ie, becomes 11
//        echo '<br/>';
//        echo --$this->x; //subtracts 1 from that 11 first, then prints, ie, 10
//        echo '<br/>';
//        echo $this->x--; //prints 10 first, then --, ie, becomes 9
//        echo '<br/>';
//        echo $this->x;

//=================BEGINNING OF BINARY====================
//        $this->x = 10;
//        $this->y = 20;
//        echo '<br/>';
//        echo  $this->x .'+'. $this->y .'='. $this->x+$this->y;  //30
//        echo '<br/>';
//        echo $this->x - $this->y;   //-10
//        echo '<br/>';
//        echo $this->x * $this->y;   //200
//        echo '<br/>';
//        echo $this->x / $this->y;   //0.5
//        echo '<br/>';
//        echo $this->x % $this->y;   //10
//        echo '<br/>';

//        $this->x = 25;
//        $this->y = 35;
//
//        echo  $this->x + $this->y;  //60
//        echo '<br/>';
//        echo $this->x - $this->y;   //-10
//        echo '<br/>';
//        echo $this->x * $this->y;   //875
//        echo '<br/>';
//        echo $this->x / $this->y;   //0.71
//        echo '<br/>';
//        echo $this->x % $this->y;   //25
//        echo '<br/>';

//=================END OF BINARY====================



    }



}