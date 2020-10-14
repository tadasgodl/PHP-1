<?php
    $distance = rand(1, 4000);
    $consumption = 7.5;
    $price_1 = 1.3;
    $fuel_total = $consumption / 100 * $distance;
    $price_trip = $fuel_total * $price_1;
    $my_money = 100;
    $affordable = '';

    if ($my_money < $price_trip) {
        $affordable = 'neiperkama';
    } else {
        $affordable = 'iperkama';
    }


    $fuel_total_f = number_format($fuel_total, 2);
    $price_trip_f = number_format($price_trip, 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clauses</title>
    <meta charset="UTF-8">
</head>
<body>
    <div>
        <h1>Keliones Skaiciuokle</h1>
        <ul>
            <li>Nuvaziuota distancija: <?php print $distance; ?></li>
            <li>Sunaudota <?php print $fuel_total_f; ?> litru 1 kuro. </li>
            <li>Kaina: <?php print $price_trip_f; ?> pinigu.</li>
        </ul>
        <ul>
            <li>Turimi pinigai: <?php print $my_money; ?>.</li>
        </ul>
        <hr>
        <p>Isvada: Kelione <?php print $affordable; ?>.</p>
    </div>
</body>
</html>