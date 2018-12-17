<?php
use TightenCo\Jigsaw\Jigsaw;


$events->beforeBuild(function ($jigsaw) {
    $url = "http://api.openweathermap.org/data/2.5/weather?" . http_build_query([
        'q' => $jigsaw->getConfig('city'),
        'appid' => $jigsaw->getConfig('openweathermap_api_key'),
        'units' => 'imperial',
    ]);

    $jigsaw->setConfig('current_weather', json_decode(file_get_contents($url))->main);
});