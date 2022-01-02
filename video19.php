<?php
// switch
function x(){
    sleep(3);
    echo 'done <br />';
    return 3;
}
/*
$peymentStatuses=[1,3,8,2,4];

foreach($peymentStatuses as $peymentStatus){
    switch($peymentStatus){
        case 1:
            echo 'paid';
            continue 2;
        case 2:
        case 3:
            echo 'peyment declined';
            break;
        case 4:
            echo 'pending peyment';
            break;
        default:
            echo 'unknown peyment status';
            break 2;
    }
    echo '<br />';
}


if (x()==1){
    echo 1;
}elseif (x()==2){
    echo 2;
}elseif (x()==3){
    echo 3;
}else{
    echo 4;
}
*/
switch(x()){
    case 1:
        echo 'paid';
        break;
    case 2:
    case 3:
        echo 'peyment declined';
        break;
    case 4:
        echo 'pending peyment';
        break;
    default:
        echo 'unknown peyment status';
        break;
}