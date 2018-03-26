<?php
$isValid = true;

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

    if(preg_match('[^\+\/\(\)\-\d\s]', $phone)){
        $isValid = false;
    }
    $ren->phone = $phone;
}

if($membership){
    if($membership < 0 || $membership > 4) {
        //$isValid = false;
    }
    $mem->id = $membership;
}

if($title){
    if($title < 0 || $title > 100){
        $isValid = false;
    }
    $mov->id = $title;
}

echo "\nis Valid: " .$isValid;

if($isValid == 1){
    if($savetype == "add"){
        $ren->saveNewRental($mov, $mem);
    } else {
        $ren->saveEditedRental($mov, $mem);
    }
}
