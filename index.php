<?php
function generate_matrix($size) {
    $array = [];
    for ($i = 1; $i <= $size; $i++) {
        $array[$i] = [];

        for ($x = 1; $x <= $size; $x++) {
            $array[$i][$x] = rand(0, 1);
        }
    }
    return $array;
}

var_dump(generate_matrix(5));


?>
<!doctype html>
<html lang="en">
<head>
    <title>Functions</title>
</head>
<body>
    <main>
    </main>
</body>
</html>