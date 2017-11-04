Yii2 Google Chats
================
[![Latest Stable Version](https://poser.pugx.org/claudejanz/yii2-google-charts/v/stable.svg)](https://packagist.org/packages/claudejanz/yii2-google-charts) [![Total Downloads](https://poser.pugx.org/claudejanz/yii2-google-charts/downloads.svg)](https://packagist.org/packages/claudejanz/yii2-google-charts) [![Latest Unstable Version](https://poser.pugx.org/claudejanz/yii2-google-charts/v/unstable.svg)](https://packagist.org/packages/claudejanz/yii2-google-charts) [![License](https://poser.pugx.org/claudejanz/yii2-google-charts/license.svg)](https://packagist.org/packages/claudejanz/yii2-google-charts)

Yii2 Google Chats extention

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
<?php
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
    'options' => [
        'title' => 'My Daily Activity'
    ]
]);
echo GoogleChart::widget([
    'visualization' => 'LineChart',
    'data' => [
        ['Task', 'Hours per Day'],
        ['Work', 11],
        ['Eat', 2],
        ['Commute', 2],
        ['Watch TV', 2],
        ['Sleep', 7)
    ],
    'options' => [
        'title' => 'My Daily Activity'
    ]
]);

echo GoogleChart::widget([
    'visualization' => 'LineChart',
    'data' => [
        ['Year', 'Sales', 'Expenses'],
        ['2004', 1000, 400],
        ['2005', 1170, 460],
        ['2006', 660, 1120],
        ['2007', 1030, 540],
    ],
    'options' => [
        'title' => 'My Company Performance2',
        'titleTextStyle' => ['color' => '#FF0000'],
        'vAxis' => [
            'title' => 'Scott vAxis',
            'gridlines' => [
                'color' => 'transparent'  //set grid line transparent
            )],
        'hAxis' => ['title' => 'Scott hAixs'],
        'curveType' => 'function', //smooth curve or not
        'legend' => ['position' => 'bottom'],
    ]
]);

echo GoogleChart::widget([
    'visualization' => 'ScatterChart',
    'data' => [
        ['Sales', 'Expenses', ['label'=>'Quarter','role'=>'tooltip']],
        [1000, 400, '2015 Q1'],
        [1170, 460, '2015 Q2'],
        [660, 1120, '2015 Q3'],
        [1030, 540, '2015 Q4'],
    ],
    'options' => [
        'title' => 'Expenses vs Sales',
    ]
]);

echo GoogleChart::widget( [
    'visualization' => 'Gauge', 
    'packages' => 'gauge',
    'data' => [
        ['Label', 'Value'],
        ['Memory', 80],
        ['CPU', 55],
        ['Network', 68],
    ],
    'options' => [
        'width' => 400,
        'height' => 120,
        'redFrom' => 90,
        'redTo' => 100,
        'yellowFrom' => 75,
        'yellowTo' => 90,
        'minorTicks' => 5
    ]
)];
echo GoogleChart::widget( [
    'visualization' => 'Map',
    'packages'=>'map',//default is corechart
    'loadVersion'=>1,//default is 1.  As for Calendar, you need change to 1.1
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
    'options' => [
        'title' => 'My Daily Activity',
        'showTip'=>true,
    ]
]);
?>
```