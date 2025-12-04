<?php

function maxJoltage($bank) {
    $bank = str_split($bank);
    $max_1 = $bank[0];
    $max_2 = $bank[1];

    foreach($bank as $battery) {
        
    }

    $max = (int) ((string)$max_1 . (string)$max_2);

    return $max;
}

$test_sequence = [
    "987654321111111",
    "811111111111119",
    "234234234234278",
    "818181911112111"
];

$real_sequence = [
];

$totalJoltage = 0;
foreach($test_sequence as $bank) {
    $maxJoltage = maxJoltage($bank);
    echo "$maxJoltage\n";
    $totalJoltage = $totalJoltage + $maxJoltage;
}

echo $totalJoltage;

?>