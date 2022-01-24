<?php
// function 4
/*
function sum(int $x,int $y,int|float ...$num): int{
    // $sum=0;
    // foreach ($num as $number){
    //     $sum+=$number;
    // }
    // return $sum;
    return $x+$y+array_sum($num);
}
$arr=[25,11,55,7,13];
echo sum(5,10,...$arr);

function plp(int $x,int $y):int{
    if ($x%$y===0){
        return $x/$y;
    }
    return $x;

}
$x=6;
$y=3;
echo plp(y:$y,x:$x);
*/
function plp(int $x,int $y=0,int $z=1):int|float{
    var_dump($x,$y,$z);
    return ($x+$y)/$z;
}
$list=[10,'z'=>2];
echo plp(...$list);