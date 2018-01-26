<?php

class Person {
	public $firstName;
	public $lastName;
	public $age;

	public function __construct($firstName, $lastName, $yearsold) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $yearsold;
	}
}

$faiza = new Person('Faïza', 'Guène', 32);
$audre = new Person('Audre', 'Lorde', 68);

echo $faiza->firstName . ' ' . $faiza->lastName . PHP_EOL;
var_dump($faiza);
echo $audre->firstName . ' ' . $audre->lastName . PHP_EOL;
var_dump($audre);