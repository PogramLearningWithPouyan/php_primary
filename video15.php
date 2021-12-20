<?php
# Operator Precedence & Associativity

#$x=(5+3)*5;
#$x=$y=10;
#$x=5;
#$y=2;
#$z=10;
#$w=$x/$y*$z;

#$w=$x<$y>$z;
#$w=$x<$y==$z;
$x=true;
$y=false;
#var_dump($x&&!$y);
$z=true;
#var_dump($x&&$y||$z);
$w=$x&&$y;
var_dump($w);
$q=($x and $y);
var_dump($q);