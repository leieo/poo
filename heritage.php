<?php

require 'parent.php';
require 'child.php';

$enfant = new Child;
echo $enfant->number() . PHP_EOL;

require 'form.php';
require 'square.php';
require 'triangle.php';

echo (new Square)->area() . PHP_EOL;
echo (new Triangle)->area() . PHP_EOL;