<?php

class Policeman extends Person
{
	private $grade;

	public function __construct($firstName, $lastName, $yearsold, $rank)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $yearsold;
		$this->grade = $rank;

		static::$totalCount++;
	}

	public function fullName() 
	{
		$fullName = parent::fullName();
		return "Agent " . $fullName . ", Policier, " . $this->grade;
	}
}