<?php
    $real_time_hours = date('h');
    $real_time_minutes = date('i');
    $real_time_seconds = date('s');

    $hours_to_degrees = 360 / 12 * $real_time_hours;
    $minutes_to_degrees = 360 / 60 * $real_time_minutes;
    $seconds_to_degrees = 360 / 60 * $real_time_seconds;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clock</title>
    <style>
        main {
            display: flex;
            justify-content: center;
        }
        .clock-base {
            position: relative;
            background-image: url("images/clock-template.jpg");
            background-size: contain;
            width: 400px;
            height: 400px;
        }
        .clock-hour-arrow {
            position: absolute;
            height: 150px;
            width: 5px;
            left: 49.4%;
            top: 12.5%;
            background-color: red;
            transform: rotate(<?php print $hours_to_degrees; ?>deg);
            transform-origin: 0% 100%;
        }
        .clock-minutes-arrow {
            position: absolute;
            height: 150px;
            width: 5px;
            left: 49.4%;
            top: 12.5%;
            background-color: yellow;
            transform: rotate(<?php print $minutes_to_degrees; ?>deg);
            transform-origin: 0% 100%;
        }
        .clock-seconds-arrow {
            position: absolute;
            height: 150px;
            width: 5px;
            left: 49.4%;
            top: 12.5%;
            background-color: black;
            transform: rotate(<?php print $seconds_to_degrees; ?>deg);
            transform-origin: 0% 100%;
        }
    </style>
</head>
<body>
    <main>
        <div class="clock-base">
            <div class="clock-hour-arrow"></div>
            <div class="clock-minutes-arrow"></div>
            <div class="clock-seconds-arrow"></div>
        </div>
    </main>
</body>
</html>