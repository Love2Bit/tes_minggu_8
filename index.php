<?php
require 'vendor/autoload.php';

use line\Circle;
use line\Square;
use line\Triangle;

echo (new Square())->getArea().PHP_EOL;
echo (new Triangle())->getArea().PHP_EOL;
echo (new Circle())->getArea().PHP_EOL;
