<?php

class Policeman extends Person
{
	public function fullName() 
	{
		return sprintf("Agent %s %s, Policier", $this->firstName, $this->lastName);
	}
}