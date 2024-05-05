<?php
include '../db.php';
require_once '../../vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create();

for ($i=1; $i <= 50; $i++) { 
  $user_id = $faker->numberBetween(1, 20);
  $title = $faker->words(3, true);
  $price = $faker->randomNumber(9, false);
  $address = $faker->streetAddress();
  $description = $faker->paragraphs(3, true);

  $conn->query("INSERT INTO posts (user_id, title, price, address, description) VALUES ('$user_id', '$title', '$price', '$address', '$description')");
}

header('Location: ../../');
