<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bomb</title>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <style>
        body {
            display: flex;
            justify-content: center;
        }
        .bomb {
            content: url("images/bomb.png");
            height: <?php print date('s') . 'px';?>;
        }
    </style>
</head>
<body>
    <div class="bomb"></div>
</body>
</html>