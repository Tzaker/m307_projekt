<?php
require 'app/Models/Movie.php';
require 'app/Models/Rental.php';

$mov = new Movie();
$rental = new Rental();

$rentals = $rental->getAllRentals();
require 'app/Views/show.view.php';