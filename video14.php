<?php
# operators
// Arithmetic Operators (+ - * / % **)

//  Assignment operators(= += -= *= /= %= **=)

// string operators (. .=)

// comparisonmoperators (== === != <> !===             
//                       <=  >= <=> ?? ?:)

// Error control operators ( @ )

#$x=@file('foo.text');

// Increment/Decrement oprerators (++ --)

#$x='abc';
# $x++ ,++$x ,$x-- ,--$x
#echo --$x;

// Logical operators (&& || ! and or xor)
#$x=true;
#$y=false;
#var_dump($x && $y);
#var_dump($x || $y);
#var_dump(!$x);
#var_dump(!$x||$y);
#$z=$x and $y;
#var_dump($z);

// Birwise operators (& | ^ ~ << >>)

#$x=6;
#$y=1;
#110
#&
#011
#------
#010
#var_dump($x & $y);
#110
#|
#011
#------
#111
#var_dump($x |$y);
#110
#^
#011
#------
#101
#var_dump($x^$y);

#var_dump(~$x);
#110000
#var_dump($x<<$y);
#11
#var_dump($x>>$y);

// Array operators(+ == === != !== <>)
/*
$x=['a'=>1,'b'=>2,'c'=>3,'d'];
$y=['c','e','f','g','a'];
$z=$x+$y;
print_r($z);
$x=['a'=>1,'c'=>3,'b'=>2,'d'];
$y=['a'=>1,'b'=>2,'c'=>3,'d'];
$z=$x===$y;
$w=$x==$y;
var_dump($z);
var_dump($w);
*/

// Exection operators('')

// type operators(instanceof)

// nullsafe operators-php8 (?)
