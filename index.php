<?php
$work_time = 12;
$max_capacity = 10; // 10 customers max at a time //
$total_customers = 0;
$total_profit = 0;
$lost_customers = 0;
$carusel_cycle = 0;
$ticket_price = 13; // eur //

for ($x = 1; $x <= $work_time; $x++) {
    $hourly_intake = rand(1, 20);
    if ($hourly_intake <= $max_capacity) {
        if ($hourly_intake == $max_capacity) { // 10 customers take the ride and are added to client list //
            $total_customers += 10;
            $carusel_cycle++;
        } else {
            $lost_customers += $hourly_intake;
            $total_customers += 0; // less than 10 customers appear, ride doesn't start //
        }
    } else { // more than 10 costumers, 10 is max capacity, others left //
        $lost_customers += ($hourly_intake - 10);
        $total_customers += 10;
        $carusel_cycle++;
    }
    $total_profit = $total_customers * $ticket_price;
}

$h1 = "Carusel profit is $total_profit euros.";
$h2 = "$total_customers people enjoyed the ride in the carusel today.";
$h3 = "$lost_customers people left for the carusel couldn't start in time.";
$h4 = "Carusel has had $carusel_cycle cycles today."
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loops</title>
</head>
<body>
    <main>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h4><?php print $h4; ?></h4>
    </main>
</body>
</html>