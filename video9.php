<?php
# string
/*
$firstName='pouyan';
#$lastName="rajian {$firstName}";
$lastName="rajian";

$name=$firstName.' '.$lastName;
#$name[-2]='A';
$name[18]='A';
*/

#heredox
$x=1;
$y=2;

$text=<<<TE
    line $x
line $y
line3
TE;

/*
$test=<<<RE
<dir>
    <p>hello</p>
    <p>world</p>
</dir>
RE;
*/
#nawdox

/*
$text=<<<'TE'
line 1
line 2
line3
TE;
*/

echo nl2br($text);
echo '<br/>';
var_dump($text);