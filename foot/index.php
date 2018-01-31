<?php

require 'vendor/autoload.php';

$barcelona = new Acme\Team("Barcelona");
$real = new Acme\Team("Real Madrid");

echo $barcelona->getName() . ' a ' . $barcelona->getFans() . ' fans !' . PHP_EOL;
echo $real->getName() . ' a ' . $real->getFans() . ' fans !' . PHP_EOL;

$firstleague = new Acme\League("First League");
$firstleague->addTeam($barcelona);
$firstleague->addTeam($real);
echo $firstleague->getTeamCount() . ' équipes ont rejoint la league ' . $firstleague->getName()  . PHP_EOL;

$honore = new Acme\Person("Honore Hounwanou");
$pierre = new Acme\Person("Pierre Dubuc");
$natalia = new Acme\Person("Natalia Marton");

$honore->favoriteTeam($real);

echo $barcelona->getName() . ' a ' . $barcelona->getFans() . ' fans !' . PHP_EOL;
echo $real->getName() . ' a ' . $real->getFans() . ' fans !' . PHP_EOL;
echo 'Honoré supporte ' . $honore->getTeam() . PHP_EOL;

$honore->tellFavTeam();

$honore->favoriteTeam($barcelona);

$honore->tellFavTeam();
