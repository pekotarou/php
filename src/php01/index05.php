<?php
$a = 7;
$b = 10;
$c = 5;
$d = 5;

if($a<>7){
    echo "\$aは7以外です";
}elseif($a===7){
    echo "\$aは7です";
}else{
    echo "\$aは謎です";
}


echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
echo "<br />";


$people = "Saburo";

switch(1){
    case $people == "aburo";
    echo "aburoです";
    break;
    case $people == "Saburo";
    echo "三郎です<br>";
    break;
}

$result = ($a===7) ? "TRUE" : "FALSE";
echo $result;