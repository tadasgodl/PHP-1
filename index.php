<?php
    $tmrw_date = date('Y-m-d', strtotime(+1 . 'days'));
    $tmrw_date_weekday = date('l', strtotime(+1 . 'days'));

    $breakfast_random = rand(1, 2);
    $lunch_random = rand(1, 2);
    $dinner_random = rand(1, 2);

    $total_price = 0;

    if ($breakfast_random == 1) {
        $breakfast_price = 5.5;
        $total_price += $breakfast_price;
        $cheapest_breakfast = 'Pigiausias produktas';
    } else {
        $breakfast_price = 7.5;
        $total_price += $breakfast_price;
        $cheapest_breakfast = null;
    }

    if ($lunch_random == 1) {
        $lunch_price = 4;
        $total_price += $lunch_price;
        $cheapest_lunch = null;
    } else {
        $lunch_price = 2.5;
        $total_price += $lunch_price;
        $cheapest_lunch = 'Pigiausias produktas';
    }

    if ($dinner_random == 1) {
        $dinner_price = 2.75;
        $total_price += $dinner_price;
        $cheapest_dinner = 'Pigiausias produktas';
    } else {
        $dinner_price = 6;
        $total_price += $dinner_price;
        $cheapest_dinner = null;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clauses</title>
    <meta charset="UTF-8">
    <style>
        body {
            display: flex;
            justify-content: center;
        }
        img {
            width: 150px;
            height: 100px;
        }
        h1, h2, h3 {
            text-align: center;
        }
        div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .cheapest {
            background: green;
            color: antiquewhite;
        }
        .breakfast-1 {
            content: url("images/breakfast1.jpg");
        }
        .breakfast-2 {
            content: url("images/breakfast2.jpg");
        }
        .lunch-1 {
            content: url("images/lunch1.jpg");
        }
        .lunch-2 {
            content: url("images/lunch2.jpg");
        }
        .dinner-1 {
            content: url("images/dinner1.jpg");
        }
        .dinner-2 {
            content: url("images/dinner2.jpg");
        }
    </style>
</head>
<body>
    <main>
        <h1><?php print $tmrw_date; ?></h1>
        <h2><?php print $tmrw_date_weekday; ?></h2>
        <div>
            <h3>Breakfast</h3>
            <img class="breakfast-<?php print $breakfast_random; ?>">
            <p>Price: <?php print $breakfast_price; ?> EUR.</p>
            <p class="cheapest"><?php print $cheapest_breakfast; ?></p>
        </div>
        <div>
            <h3>Lunch</h3>
            <img class="lunch-<?php print $lunch_random; ?>">
            <p>Price: <?php print $lunch_price; ?> EUR.</p>
            <p class="cheapest"><?php print $cheapest_lunch; ?></p>
        </div>
        <div>
            <h3>Dinner</h3>
            <img class="dinner-<?php print $dinner_random; ?>">
            <p>Price: <?php print $dinner_price; ?> EUR.</p>
            <p class="cheapest"><?php $cheapest_dinner; ?></p>
        </div>
        <h2>Total price is: <?php print $total_price; ?> EUR.</h2>
    </main>
</body>
</html>