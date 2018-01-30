<?php
/*
require 'parent.php';
require 'child.php';

$enfant = new Child;
echo $enfant->number() . PHP_EOL;

require 'form.php';
require 'square.php';
require 'triangle.php';

echo (new Square)->area() . PHP_EOL;
echo (new Triangle)->area() . PHP_EOL;

*/

require 'person.php';
require 'policeman.php';

$policeman = new Policeman('Olivier', 'Dubois', 33);
echo $policeman->fullName() . PHP_EOL;
echo '(' . Person::getTotalCount() . ' personnes créées)' . PHP_EOL;