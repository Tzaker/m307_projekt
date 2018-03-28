<?php
$isValid = true;

$errors = [];

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
        array_push($errors, 'Bitte gib einen Vornamen ein oder kürze die Länge auf 50 Zeichen.');
    }
    $ren->firstname = $firstname;
}

if($surname){
    if(strlen($surname) < 1 || strlen($surname) > 50){
        array_push($errors, 'Bitte gib einen Nachnamen ein oder kürze die Länge auf 50 Zeichen.');
    }
    $ren->surname = $surname;
}

if($email){
    if(strlen($email) < 1 || strlen($email) > 50){
        array_push($errors, 'Bitte gib eine Email ein oder kürze die Länge auf 50 Zeichen.');
    }
    if(!strpos($email, "@")){
        array_push($errors, 'Bitte gib eine gültige Email ein.');
    }
    $ren->email = $email;
}

if($phone){
    if(strlen($phone) < 1 || strlen($phone) > 50){
        array_push($errors, 'Bitte gib eine Telefonnummer ein oder kürze die Länge auf 50 Zeichen.');
    }

    if(preg_match('/[^\+\/\(\)\-\d\s]/', $phone)){
        array_push($errors, 'Bitte gib eine gültige Telefonummer ein.');
    }
    $ren->phone = $phone;
}

if($membershipkey && $savetype == "add"){
    if($membershipkey < 0 or $membershipkey > 4) {
        array_push($errors, 'Bitte gib eine gültige Mitgliedschaft an.');
    }
    $mem->id = $membershipkey;
}

if($movieid){
    if($movieid < 0 || $movieid > 100){
        array_push($errors, 'Bitte gib einen gültigen Film an.');
    }
    $mov->id = $movieid;
}

if($returned == 0 || $returned == 1){
    $ren->status = $returned;
}

if(count($errors) == 0){
    //echo "<h3>Gültige Eingabe. Wird verarbeitet.</h3>";
    if($savetype == "add"){
        $ren->saveNewRental($mov, $mem);
    } else {
        $ren->saveEditedRental($mov);
    }
    
    headerToRoute("show");
} /*else {
    foreach ($errors as $error) {
        echo $error . '<br/>';
    }
    echo "ungültige Eingabe ";
}*/
