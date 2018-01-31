<?php

namespace Acme;

class Team 
{
	private $name;
	private $fans = 0;

	public function __construct($teamName) {
		$this->name = $teamName;
	}

	public function getName() {
		return $this->name;
	}

	public function getFans() {
		return $this->fans;
	}

	public function favorite() {
		$this->fans++;
	}
}
