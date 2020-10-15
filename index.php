<?php
    $sunny = rand(0, 1);
    $rainy = rand(0, 1);

    $weather = '';
    $weather_class = '';

    if ($sunny) {
        if ($rainy) {
            $weather = 'Sunny with rain.';
            $weather_class = 'sunny-with-rain';
        } else {
            $weather = 'Sunny.';
            $weather_class = 'sunny';
        }
    } else {
        if ($rainy) {
            $weather = 'Rainy.';
            $weather_class = 'rainy';
        } else {
            $weather = 'Cloudy.';
            $weather_class = 'cloudy';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clauses</title>
    <meta charset="UTF-8">
    <style>
        .sunny-with-rain {
            background-image: url("https://cdn1.iconfinder.com/data/icons/weather-forecast-meteorology-color-1/128/weather-sunny-showers-512.png");
            background-repeat: no-repeat;
        }
        .sunny {
            background-image: url("https://cdn1.iconfinder.com/data/icons/weather-flat-9/512/weather__season__forecast__sunny__sun__hot__big_-512.png");
            background-repeat: no-repeat;
        }
        .rainy {
            background-image: url("https://cdn2.iconfinder.com/data/icons/weather-flat-14/64/weather07-512.png");
            background-repeat: no-repeat;
        }
        .cloudy {
            background-image: url("https://cdn2.iconfinder.com/data/icons/weather-flat-14/64/weather07-512.png");
            background-repeat: no-repeat;
        }
        div {
            height: 300px;
        }
    </style>
</head>
<body>
    <div class="<?php print $weather_class; ?>">
    <p><?php print $weather; ?></p>
    </div>
</body>
</html>