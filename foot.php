<?php

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

$barcelona = new Team("Barcelona");
$real = new Team("Real Madrid");

echo $barcelona->getName() . ' a ' . $barcelona->getFans() . ' fans !' . PHP_EOL;
echo $real->getName() . ' a ' . $real->getFans() . ' fans !' . PHP_EOL;

$firstleague = new League("First League");
$firstleague->addTeam($barcelona);
$firstleague->addTeam($real);
echo $firstleague->getTeamCount() . ' équipes ont rejoint la league ' . $firstleague->getName()  . PHP_EOL;

$honore = new Person("Honore Hounwanou");
$pierre = new Person("Pierre Dubuc");
$natalia = new Person("Natalia Marton");

$honore->favoriteTeam($real);

echo $barcelona->getName() . ' a ' . $barcelona->getFans() . ' fans !' . PHP_EOL;
echo $real->getName() . ' a ' . $real->getFans() . ' fans !' . PHP_EOL;
echo 'Honoré supporte ' . $honore->getTeam() . PHP_EOL;

$honore->tellFavTeam();

$honore->favoriteTeam($barcelona);

$honore->tellFavTeam();