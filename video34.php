<?php
// file system
$directory=scandir(__DIR__);
#var_dump($directory);
#var_dump((is_file($directory[2])));
#var_dump((is_dir($directory[2])));
#mkdir('test/that',recursive:true);
#rmdir('test');
// if (file_exists('test.txt')){
//     echo filesize('test.txt');
// }else{
//     echo 'file not found';
// }
// file_put_contents('test2.txt',' hello world2',FILE_APPEND);
// clearstatcache();
// echo filesize('test.txt');

// $file=fopen('test.txt','r');
#var_dump($file);
// while (($line=fgets($file))==! false){
//     echo $line.'<br />';
// }
// while (($line=fgetcsv($file))==! false){
//     print_r($line);
// }
// fclose($file);
// $content=file_get_contents('test.txt',offset:3,length:2);
// echo $content;
// unlink('test2.txt');
// copy('test.txt','copytest.txt');
// rename('copytest.txt','test2.txt');
print_r(pathinfo('test.txt'));