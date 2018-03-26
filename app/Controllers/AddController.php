<?php
require 'app/Models/Movie.php';
require 'app/Models/Membership.php';
$mov = new Movie();
$mem = new Membership();

function showMembershipStatus(){

}

$movies = $mov->getAllMovies();
$memberships = $mem->getAllMemberships();

require 'app/Views/add.view.php';
