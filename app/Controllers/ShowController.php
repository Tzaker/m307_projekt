<?php
require 'app/Models/Rental.php';
$rental = new Rental();

$rentals = $rental->getOpenRentals();
require 'app/Views/show.view.php';