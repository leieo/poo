<?php

class Policeman extends Person
{
	public function fullName() 
	{
		$fullName = parent::fullName();
		return "Agent " . $fullName . ", Policier";
	}
}