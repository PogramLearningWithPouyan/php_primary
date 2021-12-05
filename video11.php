<?php
# array

$language=['php','python','java','c++','go'];

#$language1=array('php','python','java');
#echo $language[6];

#var_dump(isset($language[6]));
#$language[2]=123;
#$language[]=true;
#array_push($language,123,'po',12.3);
/*
$myaaray=[
    'php'=>'8.0',
    'python'=>'3.8',
];

$myaaray['go']='1.1';
*/
/*
$newarray=[
    1=>[
        'x'=>5,
        'y'=>6,
        'z'=>7
    ],
    'new'=>[
        'x'=>'plp',
        'brand'=>['sony','iphone'],
        'oldarray'=>['name'=>'poyan',
                    'age'=>30
                    ,'skill'=>null]
    ]
    ];
*/
$array1=['x'=>'a','y'=>'a','z'=>'c','z'=>'1','t'=>null];
#$array2=[true=>'a',1=>'b','1'=>'c',1.8=>'d',null=>'e'];
var_dump(array_key_exists('t',$array1));
var_dump(isset($array1['t']));

#$abc=[1,2,50=>3,4,'new'=>5];
#$g=array_pop($abc);
#$g=array_shift($abc);
#unset($abc[50],$abc[0]);
#echo '<pre>';
#print_r($abc) ;
#echo '</pre>';
#echo $g;
#echo $array2[''];
#echo $newarray['new']['b'][0];
#echo $myaaray['c++'];
#echo count($language);

#$x=null;

#var_dump((array)$x);
