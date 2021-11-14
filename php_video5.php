<?php
# data types & type casting

# 4 scalar types
    # bool
    #$completed=true;
    # int
    #$score=75;
    # float
    #$price=42.7;
    # string
    #$name='pouyan';
/*
    echo $completed.'<br />';
    echo gettype($completed).'<br />';
    echo $score.'<br />';
    echo gettype($score).'<br />';

    echo $price.'<br />';
    echo gettype($price).'<br />';

    echo $name.'<br />';
    echo gettype($name).'<br />';
*/
#var_dump($score);



# 4 compound types
    # array
    #$list=[1,2,3,0.5,4.8,'a','plp',true];
    #print_r($list);
    # object
    # callable
    # iterable

# 2 special types
    # resource
    # null

/*
$x=3;
$y='2';
$z=$x+$y;
var_dump($x,$y);
#echo $z;
var_dump($z);
*/
$s=(int)'5';
var_dump($s);