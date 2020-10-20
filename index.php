<?php
$days = 365;
$pack_price = 3.50;
$count_ttl = 0;
$price_ttl = 0;

for ($i = 1; $i <= $days; $i++) {
    $date_check = date('N', strtotime("+$i days"));
    $cigs_mon_fri = rand(3, 4);
    $cigs_sat = rand(10, 20);
    $cigs_sun = rand(1, 3);

    if ($date_check > 6) {
        $count_ttl += $cigs_mon_fri;
    }
    else if ($date_check == 6) {
        $count_ttl += $cigs_sat;
    } else {
        $count_ttl += $cigs_sun;
    }

    $price_ttl = $count_ttl / 20 * $pack_price;
}

$h2 = "Per $days dienas, surukysiu $count_ttl cigareciu uz $price_ttl euru. ";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loops</title>
</head>
<body>
    <main>
        <h1>Mano dumu skaiciuokle</h1>
        <h2><?php print $h2; ?></h2>
    </main>
</body>
</html>