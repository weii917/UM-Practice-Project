<?php

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        printf("%2d X %2d = %2d | ", $i, $j, $i * $j);
    }
    echo "\n";
}
