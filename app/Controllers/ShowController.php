<?php
require 'app/Models/Rental.php';
$rental = new Rental();

$rentals = $rental->getOpenRentals();

foreach ($rentals as &$row) {
    $datereturn = new DateTime($row['time_return']);
    $datenow = new DateTime(date('Y-m-d'));

    if ($datereturn >= $datenow)
        $row['smile'] = "😁";
    else 
        $row['smile'] = "😠";
    
    $row['time_return'] = $datereturn->format('d.m.Y');

}

if(post('returnids')){
    $idarray = post('returnids');
    $rental->setReturned($idarray);
    headerToRoute("show");
}

require 'app/Views/show.view.php';

