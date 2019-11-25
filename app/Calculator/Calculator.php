<?php 
namespace App\Calculator;

class Calculator
{

    /**
     * Handle an incoming request.
     *
     * @param  Array $numbers
     * @return int
     */
    public static function add($numbers)
    {

        $total = 0;
        if(is_array($numbers)) {
            for($i = 0; $i < count($numbers); $i++) {
                $number = $numbers[$i];
                if(is_numeric($number) && $number > 0 && $number == round($number)) {
                    $total += intval($number);
                }
            }
        }
        
        return $total;
        //echo "Hello, from Facade class.";
    }
}