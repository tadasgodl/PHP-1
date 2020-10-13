<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        PHP lydes ir
        <?php print date('y-m-d', strtotime('+' . rand(1, 1000) . 'days')) . '!'; ?></title>
    <meta charset="UTF-8">
    <style>
        body {
            background: rgb(<?php print rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255); ?>);
        }
        h1 {
            font-size:<?php print rand(10, 50);?>px;
        }
        p {
            color: rgb(<?php print rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255); ?>);
        }
    </style>
</head>
<body>
    <main>
        <h1>
            <b>Vardas</b> - galbut turesiu
            <?php print rand(1, 5) . ' vaika(us)!'; ?>
        </h1>
        <p>
            Trumpas nebebus prezidentu:
            <?php print date('Y-m-d', strtotime('+' . rand(2, 10) . 'year')); ?> ne uz kalnu!
        </p>
    </main>
</body>
</html>