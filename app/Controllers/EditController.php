<?php
require 'app/Models/Movie.php';
require 'app/Models/Rental.php';

$mov = new Movie();
$rental = new Rental();

$movies = $mov->getAllMovies();
require 'app/Views/edit.view.php';