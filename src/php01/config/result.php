<?php

$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
$num_of_inq = htmlspecialchars($_GET['num_of_inq'], ENT_QUOTES);
$number = htmlspecialchars($_GET['number'], ENT_QUOTES);



print "私の名前は、" . $name ."<br>";
print "注文商品は、" . $num_of_inq."<br>";
print "注文数は、" . $number."<br>";



/** 
 $name = htmlspecialchars($_GET['name'], ENT_QUOTES);
$num_of_inq = htmlspecialchars($_GET['num_of_inq'], ENT_QUOTES);
$number = htmlspecialchars($_GET['number'], ENT_QUOTES);


print "私のは" . $name ;
print "ご希望の商品は、".$num_of_inq;
print "注文数は、".$number;
*/