<?php

function gcd($firstValue, $secondValue){
    if($firstValue > $secondValue){
        $output= $firstValue % $secondValue;
        echo $output;
    }else{
        $output= $secondValue % $firstValue;
        echo $output;
    }    
}
 
 gcd(12,18);
