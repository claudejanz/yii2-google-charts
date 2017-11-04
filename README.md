Yii2 Google Chats
================
[![Latest Stable Version](https://poser.pugx.org/claudejanz/yii2-google-charts/v/stable.svg)](https://packagist.org/packages/claudejanz/yii2-google-charts) [![Total Downloads](https://poser.pugx.org/claudejanz/yii2-google-charts/downloads.svg)](https://packagist.org/packages/claudejanz/yii2-google-charts) [![Latest Unstable Version](https://poser.pugx.org/claudejanz/yii2-google-charts/v/unstable.svg)](https://packagist.org/packages/claudejanz/yii2-google-charts) [![License](https://poser.pugx.org/claudejanz/yii2-google-charts/license.svg)](https://packagist.org/packages/claudejanz/yii2-google-charts)

Yii2 Google Chats extention 
This plugin don't relaod main librairies on Pjax calls

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist claudejanz/yii2-google-charts "*"
```

or add

```
"claudejanz/yii2-google-charts": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

use claudejanz\googlecharts\GoogleChart;

echo GoogleChart::widget([
    'visualization' => 'PieChart',
    'data' => [
        ['Task', 'Hours per Day'],
        ['Work', 11],
        ['Eat', 2],
        ['Commute', 2],
        ['Watch TV', 2],
        ['Sleep', 7]
    ],
    'pluginOptions' => [
        'title' => 'My Daily Activity'
    ]
]);

echo GoogleChart::widget([
    'visualization' => 'LineChart',
    'data' => [
        ['X', 'Dog'],
        [0, 0], [1, 10], [2, 23], [3, 17], [4, 18], [5, 9],
        [6, 11], [7, 27], [8, 33], [9, 40], [10, 32], [11, 35],
        [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
        [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
        [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
        [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
        [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
        [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
        [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
        [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
        [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
        [66, 70], [67, 72], [68, 75], [69, 80]
    ],
    'pluginOptions' => [
        'hAxis' => [
            'title' => 'Time'
        ],
        'vAxis' => [
            'title' => 'Popularity'
        ],
        'backgroundColor' => '#f1f8e9'
    ]
]);

echo GoogleChart::widget([
    'visualization' => 'Gauge',
    'packages' => ['gauge'],
    'data' => [
        ['Label', 'Value'],
        ['Memory', 80],
        ['CPU', 55],
        ['Network', 68]
    ],
    'pluginOptions' => [
        'redFrom' => 90,
        'redTo' => 100,
        'yellowFrom' => 75,
        'yellowTo' => 90,
        'minorTicks' => 5
    ]
]);

$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY');
echo GoogleChart::widget([
    'visualization' => 'Map',
    'packages' => ['map'], //default is corechart
    'data' => [
        ['Country', 'Population'],
        ['China', 'China: 1,363,800,000'],
        ['India', 'India: 1,242,620,000'],
        ['US', 'US: 317,842,000'],
        ['Indonesia', 'Indonesia: 247,424,598'],
        ['Brazil', 'Brazil: 201,032,714'],
        ['Pakistan', 'Pakistan: 186,134,000'],
        ['Nigeria', 'Nigeria: 173,615,000'],
        ['Bangladesh', 'Bangladesh: 152,518,015'],
        ['Russia', 'Russia: 146,019,512'],
        ['Japan', 'Japan: 127,120,000']
      ],
    'pluginOptions' => [
        'showTooltip' => true,
        'showInfoWindow' => true,
    ]
]);

```