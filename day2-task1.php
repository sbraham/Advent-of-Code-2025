<?php

function isIdInvalid($id) {
    $id = (string) $id;
    $id_length = strlen($id);

    if ($id_length%2 != 0) return false;

    $fst_half = substr($id, 0, $id_length/2);
    $scd_half = substr($id, $id_length/2, $id_length-1);

    if ($fst_half == $scd_half) {
        return true;
    } else {
        return false;
    }
}

# input and Id Range string e.g. "11-22"
function sumInvalidIds($id_range) {
    $sum = 0;
    $id_range = explode("-", $id_range);

    $range = range((int)$id_range[0], (int)$id_range[1]);

    foreach ($range as $id) {
        if (isIdInvalid($id)) $sum = $sum + $id;
    }

    return $sum;
}

$test_sequence = [
    "11-22",
    "95-115",
    "998-1012",
    "1188511880-1188511890",
    "222220-222224",
    "1698522-1698528",
    "446443-446449",
    "38593856-38593862",
    "565653-565659",
    "824824821-824824827",
    "2121212118-2121212124"
];

$real_sequence = [
    "92916254-92945956",
    "5454498003-5454580069",
    "28-45",
    "4615-7998",
    "4747396917-4747534264",
    "272993-389376",
    "36290651-36423050",
    "177-310",
    "3246326-3418616",
    "48-93",
    "894714-949755",
    "952007-1003147",
    "3-16",
    "632-1029",
    "420-581",
    "585519115-585673174",
    "1041-1698",
    "27443-39304",
    "71589003-71823870",
    "97-142",
    "2790995-2837912",
    "579556301-579617006",
    "653443-674678",
    "1515120817-1515176202",
    "13504-20701",
    "1896-3566",
    "8359-13220",
    "51924-98061",
    "505196-638209",
    "67070129-67263432",
    "694648-751703",
    "8892865662-8892912125"
];

$total = 0;

foreach($real_sequence as $range) {
    $total = $total + sumInvalidIds($range);
}

echo $total;

?>