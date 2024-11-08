<?php
for ($i=1; $i < 6; $i++)
{
    echo $i;
}
echo "\n";

for ($j=1; $j <= 10; $j++)
{
    echo $j;
    echo "-";
}

echo "\n";

$color=array("red"=>"kyzyl","green"=>"zhasyl","blue"=>"kok");
foreach ($color as $key=>$value) {
    echo "{$value} ";
}

echo "\n";

$sign="*";
for ($i = 0;$i< 6;$i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $sign;
    }
    echo "\n";
}

