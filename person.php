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

	public function fullName() {
		return sprintf("%s %s", $this->firstName, $this->lastName);
	}
}

$faiza = new Person('Faïza', 'Guène', 32);
$audre = new Person('Audre', 'Lorde', 68);

$fullNameFaiza = $faiza->fullName();
$fullNameAudre = $audre->fullName();

echo $fullNameAudre . PHP_EOL;
echo $fullNameFaiza . PHP_EOL;