<?php
include '../db.php';
require_once '../../vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create();

for ($i=1; $i <= 20; $i++) { 
  $email = $faker->freeEmail();
  $password = $faker->randomNumber(5, false);
  $name = $faker->name();
 
  $conn->query("INSERT INTO users (email, password, name) VALUES ('$email', '$password', '$name')");
}

header('Location: /');