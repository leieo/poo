<?php

namespace Acme;

class League
{
	private $name;
	private $teams;

	public function __construct($leagueName) {
		$this->name = $leagueName;
		$this->teams = [];
	}

	public function addTeam($team) {
		$this->teams[] = $team;
	}

	public function getTeamCount() {
		return count($this->teams);
	}

	public function getName() {
		return $this->name;
	}
}