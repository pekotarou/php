<?php

function outputNumber($a){
    echo "引数の値は" . $a . "です<br>";
  return;
}

outputNumber(5);

function outputHello()
{
  echo "Hello world"."<br>";
}
outputHello();

function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 4);
echo $total."<br>";


function outputNumber2(){
    echo  5 ."<br>";
}

outputNumber2();

function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}

$total = addNumber(3, 2);
print $total."<br>";


function test($score1,$score2,$score3){
    $total = $score1+$score2+$score3;
    if( $total > 210){
        echo "合計点は ".$total." なので合格です"."<br>";
    }else{
        echo "合計点は ".$total." なので不合格です"."<br>";
    }
}


echo test(100,100,11);

function triangle($bottom,$height){
    echo $bottom*$height/2 ."<br>";
}

function square($width,$height){
    echo $width*$height."<br>";
}

function trapezoid($bottom,$height,$top){
    echo ($bottom+$top)*$height/2 ."<br>";
}

echo trapezoid(4,5,4);
