<?php
require __DIR__ . '/../autoload.php';

use Bridge\RadioRemote;
use Bridge\BasicRemoteControl;
use Bridge\TV;
use Bridge\Radio;

$TV = new TV();
$radio = new Radio();
$TvRemote = new BasicRemoteControl($TV);
$RadioRemote = new RadioRemote($radio);

echo $TvRemote->turnOn() . PHP_EOL;
echo $RadioRemote->turnOn() . PHP_EOL;

echo $TvRemote->turnOff() . PHP_EOL;
echo $RadioRemote->turnOff() . PHP_EOL;
