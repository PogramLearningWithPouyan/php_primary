<?php
// array function part2
function arrayprint(array $array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

//array_reduce(array $array,callable $callback,mixed $initialvalue=null):mixed
/*
$items=[
    ['name'=>'item1','count'=>3,'price'=>9.99],
    ['name'=>'item2','count'=>1,'price'=>29.99],
    ['name'=>'item3','count'=>1,'price'=>149],
    ['name'=>'item4','count'=>2,'price'=>14.99],
    ['name'=>'item5','count'=>4,'price'=>0.99]
];
$total=array_reduce($items,fn($sum,$item)=>
                $sum+$item['count']*$item['price'],500);
echo $total;
*/

//array_search(mixed $needle,array $heystack,bool $strict=false):int|string|false
/*
$array=['a','b','c','D','E','ab','bc','cd','b','d'];

$x='a';
if (in_array($x,$array)){
    $key=array_search($x,$array);
    var_dump($key);
}else{
    echo 'leter not found';
}
*/

//array_diff(array $array,array ...$arrays)
//array_diff_assoc(array $array,array ...$arrays)
//array_diff_key(array $array,array ...$arrays)
/*
$array1=['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'o'=>6];
$array2=['d'=>4,'g'=>5,'i'=>6,'j'=>7,'k'=>8];
$array3=['l'=>3,'e'=>5,'n'=>10,'o'=>9];

arrayprint(array_diff($array1,$array2,$array3));
arrayprint(array_diff_assoc($array1,$array2,$array3));
arrayprint(array_diff_key($array1,$array2,$array3));
*/

//asort(array $array)
//ksort(array $array)
//usort(array $array,callable $callback)
/*
$array=['d'=>3,'b'=>1,'c'=>4,'a'=>2];
#asort($array);
#ksort($array);
usort($array,fn($a,$b)=>$b<=>$a);
arrayprint($array);
*/

$array=[1,2,3,4];
#list($a,$b,$c,$d)=$array;
[1=>$a,3=>$b,0=>$c,2=>$d]=$array;

echo $a.' '.$b.' '.$c.' '.$d;