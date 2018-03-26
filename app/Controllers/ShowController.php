<?php
require 'app/Models/Rental.php';
$rental = new Rental();

$rentals = $rental->getOpenRentals();

foreach ($rentals as &$row) {
    $datereturn = strtotime($row['time_return']);
    $datenow = strtotime(date('Y-m-d'));

    if ($datereturn >= $datenow)
        $row['smile'] = "😁";
    else 
        $row['smile'] = "😠";

}

require 'app/Views/show.view.php';