<?php
// while / do while

$x=20;
/*
while($x<=16){
    echo $x++;
    echo '<br />';
}

$y=1;
while(true){
    echo$x++;
    echo '<br />';
    while(true){
        echo $y++;
        if($x>15){
            break 2;
        }
        if($y>15){
            $y=1;
            break;
        }
    }
    echo '<br />';
    
}

while($x<15):
    $x++;
    
    if($x%2==0){
        continue;
    }
    echo $x;
    echo ',';
endwhile;
*/
do{
    echo $x++;
    echo '<br />';
}while($x<15);

