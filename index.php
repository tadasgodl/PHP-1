<?php
$months = 24;
$car_price_new = 30000; // brand new price //
$car_price_used = 30000; // start price //
$depreciation = 0.98; // reducing price 2% //
$depr_perc =  38.42; // ($car_price_new - $car_price_used) / 100 = 38.42; //

for ($x = 1; $x <= $months; $x++) {
    $car_price_used *= $depreciation;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loops</title>
</head>
<body>
    <main>
        <h1>Kiek nuvertes masina?</h1>
        <h2>Naujos masinos kaina: <?php print $car_price_new; ?></h2>
        <h3>Po <?php print $months; ?> men., masinos verte bus <?php print ceil($car_price_used); ?> euru.</h3>
        <h4>Masina nuvertes <?php print $depr_perc; ?> procentu.</h4>
    </main>
</body>
</html>