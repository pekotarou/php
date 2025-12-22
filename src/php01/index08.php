<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo "<br>".$people[1]."<br>";


$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

var_dump($people);

$people = [
  'person1' => 'taro',
  'person2' => 'jiro',
];


var_dump($people);

echo "<br>".$people['person1'];

$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];


echo "<br>".$people[1]["age"]."<br>";

$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}

$people = [
  [
    "last_name" => "山田",
    "first_name" => "taro",
    "age" => 25,
    "gender" => "men"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "jiro",
    "age" => 20,
    "gender" => "men"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "hanako",
    "age" => 16,
    "gender" => "women"
  ]
];

foreach ($people as $person => $name ) {
  echo $people[$person]["first_name"]."（".$people[$person]["age"]."歳".$people[$person]["gender"]."）";
  echo '<br />';
}

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}