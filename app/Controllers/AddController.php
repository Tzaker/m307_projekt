<?php
require 'app/Models/Movie.php';
require 'app/Models/Membership.php';
require 'app/Models/Rental.php';
$mov = new Movie();
$mem = new Membership();
$ren = new Rental();

$movies = $mov->getAllMovies();
$memberships = $mem->getAllMemberships();


$firstname = post('firstname') ?? ''; 
$surname = post('surname') ?? ''; 
$email = post('email') ?? '';
$phone = post('phone') ?? ''; 
$membership = post('membership') ?? ''; 
$title = post('title') ?? '';
$savetype = post('savetype') ?? '';


require 'app/Views/add.view.php';

if(post('firstname')){
    require 'app/Controllers/ValidationController.php';
}
