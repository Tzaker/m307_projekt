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


require 'app/Views/edit.view.php';
if(post('firstname')){
    require 'app/Controllers/ValidationController.php';
}
