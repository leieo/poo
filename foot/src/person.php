<?php

namespace Acme;

class Person 
{
	private $name;
	private $team = "test";

	public function __construct($name) {
		$this->name = $name;
	}

	public function favoriteTeam(Team $teamName) {
		$this->team = $teamName->getName();
		$teamName->favorite();
	}

	public function getTeam() {
		return $this->team;
	}

	public function  tellFavTeam() {
		echo $this->name . ' supporte ' . $this->getTeam() . PHP_EOL;
	}
}