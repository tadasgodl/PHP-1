<?php
$x = rand(1, 100);
$y = rand(1, 100);

function is_prime($variable) {
    if ($variable === 1) {
        return false;
    }
    for ($i = 2; $i <= $variable/2; $i++) {
        if ($variable % $i == 0) {
            return false;
        }
    }
    return true;
}

$check_x = is_prime($x);
$check_y = is_prime($y);

function sum_if_prime($x, $y) {
    if (is_prime($x) && is_prime($y)) {
        return $x + $y;
    }
    else {
        return null;
    }
}

$sum = sum_if_prime($x, $y);

$p1 = $check_x ? $x . ' yra pirminis skaicius.' : $x . ' nera pirminis skaicius.';
$p2 = $check_y ? $y . ' yra pirminis skaicius.' : $y . ' nera pirminis skaicius.';
$answer = $sum ? 'The sum is: ' . $sum : 'The sum is: ----';

?>
<!doctype html>
<html lang="en">
<head>
    <title>Functions</title>
</head>
<body>
    <main>
        <p><?php print $p1; ?></p>
        <p><?php print $p2; ?></p>
        <p><?php print $answer; ?></p>
    </main>
</body>
</html>