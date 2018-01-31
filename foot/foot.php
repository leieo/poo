<?php

use Acme\Person;
use Acme\teams\Team;
use Acme\League;

/* OU BIEN ...
use Acme\{Person, League, Team};
*/

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