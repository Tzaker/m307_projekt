<?php

require 'app/Models/Movie.php';
$mov = new Movie();

$movies = $mov->getAllMovies();
require 'app/Views/edit.view.php';