<?php

require 'parent.php';
require 'child.php';

$enfant = new Child;
echo $enfant->number() . PHP_EOL;