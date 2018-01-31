<?php
 // src : https://github.com/fzaninotto/Faker  -> Basic Usage

require_once './vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name . PHP_EOL;
echo $faker->address . PHP_EOL;
echo $faker->text . PHP_EOL;

for ($i=0; $i < 10; $i++) {
  echo $faker->name, "\n";
}