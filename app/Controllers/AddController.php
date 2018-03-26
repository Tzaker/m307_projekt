<?php
require 'app/Models/Movie.php';
$mov = new Movie();

function showMembershipStatus(){

}

$movies = $mov->getAllMovies();


require 'app/Views/add.view.php';
