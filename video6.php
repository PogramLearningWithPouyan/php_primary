<?php
# boolean

$isComplete='false';
/*
if ($isComplete){
    //do this
    echo 'true';
}else{
    //do this
    echo 'false';
}
*/
#integers 0,-1,-2 ...... = false
#float 0.0, -0.001, ....... =false
#''=false
#'0'=false
#null =false
//[]=false

var_dump($isComplete) ;
var_dump(is_bool($isComplete));