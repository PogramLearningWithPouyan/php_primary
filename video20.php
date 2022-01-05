<?php
// match
$peymentStatus=1;
#switch ==
switch($peymentStatus){
    case 1:
        echo 'paid';
        break;
    case 2:
    case 3:
        echo 'peyment declined';
        break;
    case 0:
        echo 'pending peyment';
        break;
    default:
        echo 'unknown peyment status';
}
echo '<br />';
#match ===
$peyment = match ($peymentStatus){
    1 => 'paid',
    2 , 3 => 'peyment declined',
    0 => 'pending peyment',
    default => 'unknown peyment status'
};
echo $peyment;