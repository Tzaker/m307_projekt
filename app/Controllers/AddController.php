<?php
require 'app/Models/Movie.php';
require 'app/Models/Membership.php';
$mov = new Movie();
$mem = new Membership();

$movies = $mov->getAllMovies();
$memberships = $mem->getAllMemberships();


var_dump($_POST);


require 'app/Views/add.view.php';
