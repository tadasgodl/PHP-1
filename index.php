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
        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <section>
        <div class="bomb"></div>
        <P><?php print date('s')?></P>
    </section>
</body>
</html>