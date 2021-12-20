<?php
# operators
// Arithmetic Operators (+ - * / % **)
#$x=-10;
#$y=6;
#echo $x%$y;
#var_dump(fdiv($x,$y));
#var_dump(fmod($x,$y));
#var_dump($x%$y);

//  Assignment operators(= += -= *= /= %= **=)
#$x=5;
#$x=($y=10)*2;
#$x=3;
#$x+=2;
#$x-=2;
#$x/=2;
#$x**=2;
#$x%=2;
#echo $x;

// string operators (. .=)
#$x='hello';
#$x.=' '.'world';
#echo $x;

// comparisonmoperators (== === != <> !===             
//                       <=  >= <=> ?? ?:)
$x=7;
$y=5;
#var_dump($x===$y);
#var_dump($x==$y);
#var_dump($x!=$y);
#var_dump($x!==$y);
#var_dump($x<>$y);
#var_dump($x<$y);
#var_dump($x>$y);
#var_dump($x>=$y);
#var_dump($x<=$y);
#var_dump($x<=>$y);
#var_dump(0=='hello');
/*
if ($x==$y){
    echo 'yes';
}else{
    echo 'no';
}

$result= $x ==$y ? 'yes':'no';
echo $result;
*/

$x=5;
$y=$x ?? 'hello';
echo $y;