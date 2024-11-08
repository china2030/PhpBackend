<?php
$n=readline("Enter a number: ");
function NFactorial($n) : int
{
    for ($i = $n-1; $i > 0; $i--) {
        $n = $n * $i;
            }
    return  $n;
}

function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo NFactorial($n) . "\n";
echo factorial($n);