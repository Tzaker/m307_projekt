<?php
require 'app/Models/Movie.php';
require 'app/Models/Rental.php';

$mov = new Movie();
$ren = new Rental();

$movies = $mov->getAllMovies();

$id = $_GET['id'] ?? '';

$currentrental = $ren->getRentalById($id);
$currentrental = $currentrental[0];

$timerented = formatDate($currentrental['time_rented']);
$timereturn = formatDate($currentrental['time_return']);



if(post('firstname')){
    require 'app/Controllers/ValidationController.php';
}

require 'app/Views/edit.view.php';

