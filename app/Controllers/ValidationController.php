<?php
$isValid = true;

$firstname = post('firstname') ?? ''; 
$surname = post('surname') ?? ''; 
$email = post('email') ?? '';
$phone = post('phone') ?? ''; 
$membershipkey = post('membershipkey') ?? ''; 
$movieid = post('movieid') ?? '';
$savetype = post('savetype') ?? '';
$returned = post('returned') ?? '';

if($firstname){
    if(strlen($firstname) < 1 || strlen($firstname) > 50){
        $isValid = false;
    }
    $ren->firstname = $firstname;
}

if($surname){
    if(strlen($surname) < 1 || strlen($surname) > 50){
        $isValid = false;
    }
    $ren->surname = $surname;
}

if($email){
    if(strlen($email) < 1 || strlen($email) > 50){
        $isValid = false;
    }
    if(!strpos($email, "@")){
        $isValid = false;
    }
    $ren->email = $email;
}

if($phone){
    if(strlen($phone) < 1 || strlen($phone) > 50){
        $isValid = false;
    }

    if(preg_match('/[^\+\/\(\)\-\d\s]/', $phone)){
        $isValid = false;
    }
    $ren->phone = $phone;
}

if($membershipkey && $savetype == "add"){
    if($membershipkey < 0 or $membershipkey > 4) {
        $isValid = false;
    }
    $mem->id = $membershipkey;
}

if($movieid){
    if($movieid < 0 || $movieid > 100){
        $isValid = false;
    }
    $mov->id = $movieid;
}

if($returned == 0 || $returned == 1){
    $ren->status = $returned;
}

if($isValid == 1){
    echo "<h3>Gültige Eingabe. Wird verarbeitet.</h3>";
    if($savetype == "add"){
        $ren->saveNewRental($mov, $mem);
    } else {
        $ren->saveEditedRental($mov);
    }
    
    //headerToRoute("show");
} else {
    echo "ungültige Eingabe ";
}
