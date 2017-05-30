<?php
namespace Kata;

class Kata
{
    public function kata()
    {

        $fibo = [1,2];
        $bigsum = 2;
        do{
            $last2 = array_slice($fibo, -2,2);
            $sum = array_sum($last2);
            $fibo[] = $sum;
            if(!($sum %2)){
                $bigsum += $sum;
            }
        }while($sum < 4000000);

        print_r($bigsum);

     return 23;
    }


    public function multiple(){
        $res = 1;
        for($i = 1; $i <= 20; $i++){
            $res *= $i;
        }

        print_r($res);
    }

}
