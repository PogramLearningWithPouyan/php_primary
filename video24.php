<?php
// function 3
/*
function sum(int|float $x, int $z,int|float $y=0){
    return $x +$y+$z;
}

$z=sum(5.8,4,2);
echo $z;
*/
function plp(int &$x,int $y){
    if ($x%2===0){
        $x/=2;
    }
    return $x*$y;
}

$a=6.9;
$b=7;
echo plp($a,$b).'<br />';
var_dump($a,$b);