<?php
// for / foreach
$myArray=['a','b','c',5,24.3];
/*
{
    echo $x;
    echo '<br />';
}

for(;;){
    echo $x;
}

for($x=0;print $x,$x<15;$x++){
    echo '<br />';
}

$text='wellcome to my chanel';
for($x=0,$y=strlen($text);$x<$y;$x++){
    echo $text[$x].'<br />';
}


foreach($myArray as $key => $value){
    echo $key . ':'.$value.'<br />';
}


foreach($myArray as $key => &$value){
    $value='php';
}
unset($value);
print_r( $myArray);
echo  $value;
*/
$myarray2=['name'=>'pouyan',
            'chanel name'=>'program learning with pouyen',
            'available course'=>['python beginners',
                                'python pro',
                                'machine learning',
                                'php beginners']];
foreach ($myarray2 as $key => $value):
    if (is_array($value) ){
        echo $key.':';
        #$value=implode(',',$value);
        foreach($value as $course){
            echo $course.',';
        }
    }else{
        echo $key . ':'.$value.'<br />';
    }
    #echo $key.':'.json_encode($value).'<br />';
    
endforeach;