<?php
require 'app/Models/Rental.php';
$rental = new Rental();

$rentals = $rental->getAllRentals();
require 'app/Views/show.view.php';