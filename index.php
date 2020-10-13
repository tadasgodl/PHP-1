<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bomb</title>
    <meta charset="UTF-8">
    <style>
        body {
            display: flex;
            justify-content: center;
        }
        .dice1 {
            content: url("images/dice1.png");
        }
        .dice2 {
            content: url("images/dice2.png");
        }
        .dice3 {
            content: url("images/dice3.png");
        }
        .dice4 {
            content: url("images/dice4.png");
        }
        .dice5 {
            content: url("images/dice5.png");
        }
        .dice6 {
            content: url("images/dice6.png");
        }

    </style>
</head>
<body>
    <div class="dice<?php print rand(1, 6);?>"></div>
</body>
</html>