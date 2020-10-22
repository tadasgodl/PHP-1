<?php
$my_memories = [
        'Taksi',
        'Baras',
        'Laukas',
        'Gatve',
        'Valgis',
        'Gerimai',
        'Pinigai'
];

$fb_index = array_rand($my_memories);
$fb_text = $my_memories[$fb_index];

$h3 = "$fb_index: $fb_text";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ForEach Cycle</title>
</head>
<body>
    <main>
        <h1>Kas buvo penktadieni?</h1>
        <h2>Mano prisiminimai: </h2>
        <h3><?php print $h3; ?></h3>
        <ul>
            <?php foreach ($my_memories as $my_memory): ?>
                <li><?php print $my_memory; ?></li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>