<?php
/**　繰り返し */

for($i = 1; ($i*2) <= 11; $i++){
    echo $i*2 . "<br>";
}


$count = 0;

while ($count < 20) {
   $count += 1;
  echo  $count. '<br />';
}

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $i;
  $i++;
}

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i."<br>";
  $i++;
}
  


$count = 0;
while($count <= 100){
    
    if($count%3!==0 && $count<20 ){
        echo $count."<br>";
        $count++;
        //echo $count. '<br />';
    }else{
        $count++."<br>";
        
    }
}

echo "<br>do...while文<br><br>";

$num = 0;
do {
  echo "num = ". $num . '<br />';
  $num++;
} while ($num < 3);

echo "<br>fizzbuzzゲーム<br><br>";


for($num = 1; $num <= 50; $num++ ){
    if($num%3 === 0 && $num%5 === 0){
        echo "FizzBuzz"."<br>";
    }elseif($num%3 === 0){
        echo "Fizz"."<br>";
    }elseif($num%5 === 0){
        echo "Buzz"."<br>";
    }else{
    echo $num."<br>";
    }
}

echo "<br>二重ループ<br><br>";
$i = 1;
while ($i < 5) {
    $text = "●●";
    while($i < 5){
        echo $text."●●"."<br>";
        break;
    }
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  $i++;
}

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}

