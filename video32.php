<?php
// phi.ini configure php setup

#ini_get();
#ini_set();

// error_reporting, error_log, display_errors
/*
var_dump(ini_get('error_reporting'));
#var_dump(E_ALL);
#ini_set('error_reporting',E_ALL & ~E_WARNING);

var_dump(ini_get('display_errors'));
ini_set('display_errors',0);
$array=[1];
echo $array[3];
*/

// post_max_size

// max_execution_time
/*
ini_set('max_execution_time',3);
sleep(15);
echo 'hi';
*/

// memory_limit
/*
var_dump(ini_get('memory_limit'));
$string='x';
for ($i=0;$i<1000;$i++){
    $string+=$string;
}
echo $string;
*/

// file_uploads, upload_tmp_dir, upload_max_filesize

// date.timezone

// includ_path
