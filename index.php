<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        PHP lydes ir
        <?php print date('y-m-d', strtotime('+' . rand(1, 1000) . 'days')) . '!'; ?></title>
    <meta charset="UTF-8">
</head>
<body>
    <main>
        <h1>
            <b>Vardas</b> - galbut turesiu
            <?php print rand(1, 5) . ' vaiku(us)!'; ?>
        </h1>
        <p>
            Trumpas nebebus prezidentu:
            <?php print date('Y-m-d', strtotime('+' . rand(2, 10) . 'year')); ?> ne uz kalnu!
        </p>
    </main>
</body>
</html>