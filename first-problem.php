<?php

function sloaeneOEIS($n) {
    $result = [];
    $current = 0;

    //logika A000124 of Sloane’s OEIS
    for ($i = 1; $i <= $n; $i++) {
        $randomIncrement = rand(1, 10);
        $current += $randomIncrement;
        $result[] = $current;
    }
    return implode('-', $result); // each number separator
}
//input manual
$input = (int)readline("Input: ");
$output = sloaeneOEIS($input);
echo "Output: $output\n";

?>