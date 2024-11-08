<?php
$fruits = array("Apple", "Banana", "Orange");
echo count($fruits). "\n";
echo $fruits[1]. "\n";;

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Ben is " .$age["Ben"]. " years old". "\n";

$color=array("red","green","blue","yellow");
sort($color);
echo "<pre>";
print_r($color);
echo "</pre>";

arsort($color);

echo "<pre>";
print_r($color);
echo "</pre>";

arsort($age);
echo "<pre>";
print_r($age);
echo "</pre>";
