<?php
/*
require 'parent.php';
require 'child.php';

$enfant = new Child;
echo $enfant->number() . PHP_EOL;


require 'person.php';
require 'policeman.php';

$policeman = new Policeman('Olivier', 'Dubois', 33, 'Sergent');
echo $policeman->fullName() . PHP_EOL;
Person::getTotalCount();
*/

require 'form.php';
require 'square.php';
require 'triangle.php';
require 'circle.php';

/*
echo (new Square)->area() . PHP_EOL;
echo (new Triangle)->area() . PHP_EOL;
echo (new Circle)->area() . PHP_EOL;
*/

class Boom
{
	public function test(Form $shape)
	{
		echo $shape->area() . PHP_EOL;
	}
}

echo "l'aire du carré : ";
(new Boom)->test(new Square);

echo "l'aire du triangle : ";
(new Boom)->test(new Triangle);

echo "l'aire du cercle : ";
(new Boom)->test(new Circle);

// (new Boom)->test('blablabla'); 
// -> affiche une erreur.
// au niveau de la public function test(), il est défini que ...
// ... l'argument doit être une instance de la class Form