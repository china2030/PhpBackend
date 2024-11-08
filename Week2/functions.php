<?php
function myFunction(){
    echo "Hello World!";
}
myFunction();
echo "\n";
function getInfo($name,$age){
    echo $name . ":" . $age;
}
$name=readline("Type your name: ");
$age=readline("Type your age: ");
getInfo($name,$age);

function getInfo2($name,$age)
{
    $info = $name . ":" . $age;
    return $info;
}
echo "\n";
$info=getInfo2("Kana",28);
echo $info;

echo "\n";
echo basename(__FILE__);

echo "\n";

$text = '1,4,2,67,55,43,90,100';
$textArray = explode(",", $text);

print_r($textArray);

