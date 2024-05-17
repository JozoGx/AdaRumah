<?php
include '../db.php';
require_once '../../vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create();

for ($i=1; $i <= 18; $i++) { 
  $email = $faker->freeEmail();
  $password = $faker->randomNumber(5, false);
  $name = $faker->name();
  $telepon = $faker->tollFreePhoneNumber();
 
  $conn->query("INSERT INTO users (email, password, name, telepon) VALUES ('$email', '$password', '$name', '$telepon')");
}

header('Location: ../../');