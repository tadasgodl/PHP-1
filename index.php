<?php
for ($x = 1; $x < rand(10, 30); $x++) {
    for ($i = 1; $i <= $x; $i++) {
        $decoration = rand(1, 30);
        if ($decoration == 1 || $decoration == 2 || $decoration == 3) {
            print '^';
        } else {
            print '*';
        }

    }
    print '<br>';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loops</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <main>
    </main>
</body>
</html>