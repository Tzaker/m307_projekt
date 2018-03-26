<?php
require 'app/Models/Movie.php';
require 'app/Models/Rental.php';

$mov = new Movie();
$ren = new Rental();

$movies = $mov->getAllMovies();

$id = $_GET['id'] ?? '';

$currentrental = $ren->getRentalById($id);
$currentrental = $currentrental[0];

require 'app/Views/edit.view.php';