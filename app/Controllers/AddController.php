<?php
require 'app/Models/Movie.php';
require 'app/Models/Membership.php';
require 'app/Models/Rental.php';

$mov = new Movie();
$mem = new Membership();
$ren = new Rental();

$movies = $mov->getAllMovies();
$memberships = $mem->getAllMemberships();


if(post('firstname')){
    require 'app/Controllers/ValidationController.php';
}

require 'app/Views/add.view.php';

