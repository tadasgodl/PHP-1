<?php
$numbers = [838, 121, 344, 555, 768, 878, 987, 345, 565];

function palindromes(&$numbers) {
    foreach ($numbers as $index => &$number) {
        $number = strval($number);
        $reverse_number = strval(strrev($number));

        if ($number === $reverse_number) {
            $number = strrev($reverse_number) + 0;
        } else {
            array_splice($numbers, $index, 1);
        }
    }
    sort($numbers);
}

var_dump($numbers);
palindromes($numbers);
var_dump($numbers);
?>
<!doctype html>
<html lang="en">
<head>
    <title>2020-11-03</title>
    <style>
    </style>
</head>
<body>
    <main>
    </main>
</body>
</html>