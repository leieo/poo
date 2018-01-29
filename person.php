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

	public function getAge() {
		return $this->age * 365;
	}
}

$faiza = new Person('Faïza', 'Guène', 32);
$audre = new Person('Audre', 'Lorde', 84);

$fullNameFaiza = $faiza->fullName();
$fullNameAudre = $audre->fullName();

echo $fullNameAudre . ' aurait ' . $audre->age . ' ans.' . PHP_EOL;
echo $fullNameFaiza . ' a vécu ' . $faiza->getAge() . ' jours.' . PHP_EOL;