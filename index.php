<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP lydes ir <?php print date('l', strtotime('+1 day')) . '!'; ?></title>
    <meta charset="UTF-8">
</head>
<body>
    <main>
        <h1>
            <b>Vardas</b> - PHP su manim buvo ir
            <?php print date('h', strtotime('-1 hour')) . ' valanda!'; ?>
        </h1>
        <p>
            <?php print date('Y', strtotime('+1 year')); ?> ne uz kalnu!
        </p>
    </main>
</body>
</html>