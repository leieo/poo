<?php

class Policeman extends Person
{
	private $grade;

	public function __construct($firstName, $lastName, $yearsold, $rank)
	{
		parent::__construct($firstName, $lastName, $yearsold);
		$this->grade = $rank;
	}

	public function fullName() 
	{
		$fullName = parent::fullName();
		return "Agent " . $fullName . ", Policier, " . $this->grade;
	}
}