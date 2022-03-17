<?php
// error handling
function errorHandler(int $type
    ,string $msg,
    ?string $file=null,
    ?int $line=null
){
    echo $type.': '.$msg.' in '.$file.' on line '.$line; 
}
set_error_handler('errorHandler',E_ALL);
echo $x;
#error_reporting(E_ALL & ~E_WARNING);
#trigger_error('Example Error',E_USER_WARNING);
#echo 1;
#error_log();
