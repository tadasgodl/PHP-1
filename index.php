<?php
    $grizai_isgeres = 0;
    $grizai_velai = 1;

    if ($grizai_velai && $grizai_isgeres) {
        $outcome = 'Grizai velai ir isgeres';
    } else if ($grizai_velai) {
        $outcome = 'Grizai velai';
    } else if ($grizai_isgeres) {
        $outcome = 'Grizai isgeres';
    } else {
        $outcome = 'Nieko nepadarei';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clauses</title>
    <meta charset="UTF-8">
</head>
<body>
    <div>
        <h1>Buitine skaiciuokle</h1>
        <h2><?php print $outcome; ?></h2>
    </div>
</body>
</html>