<?php

if ($argc != 3) {
    echo "input two number";
    exit(1);
}

$num1 = intval($argv[1]);
$num2 = intval($argv[2]);

if ($num1 <= 0 || $num2 <= 0) {
    echo "Both number must be greater than zero";
    exit(1);
}

for ($i = 1; $i <= $num1; $i++) {
    for ($j = 1; $j <= $num2; $j++) {
        printf("%2d X %2d = %2d | ", $i, $j, $i * $j);
    }
    echo "\n";
}
