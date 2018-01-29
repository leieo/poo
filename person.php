<?php

class Person {
	public $firstName;
	public $lastName;
	public $age;
	private static $totalCount = 0;

	public function __construct($firstName, $lastName, $yearsold) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $yearsold;
		static::$totalCount++;
	}

	public static function getTotalCount() {
		return static::$totalCount;
	}

	public function fullName() {
		return sprintf("%s %s", $this->firstName, $this->lastName);
	}

	public function getAge() {
		return $this->age * 365;
	}

	public function setAge($newAge) {
		if($age > 0) {
			$this->age = $newAge;
		}
	}
}

$faiza = new Person('Faïza', 'Guène', 32);
$audre = new Person('Audre', 'Lorde', 84);
$lei = new Person('Leï', 'Omari', 29);

$fullNameFaiza = $faiza->fullName();
$fullNameAudre = $audre->fullName();

echo $fullNameAudre . ' aurait ' . $audre->age . ' ans.' . PHP_EOL;
echo $fullNameFaiza . ' a vécu ' . $faiza->getAge() . ' jours.' . PHP_EOL;

echo Person::getTotalCount() . PHP_EOL;
echo Person::$totalCount . PHP_EOL;