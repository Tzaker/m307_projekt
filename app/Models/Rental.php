<?php

class Rental {

    public $id;
    public $time;
    public $status;
    public $firstname;
    public $surname;
    public $email;
    public $phone;

    public function __construct($id = null){
        $this->id = $id;

        $this->db = connectToDatabase();
    }

    public function getAllRentals(){
        $statement = $this->db->prepare('SELECT * FROM rentals LEFT JOIN movies ON rentals.fk_ID = movies.ID LEFT JOIN membership ON rentals.fk_MembershipID = membership.MembershipID');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getOpenRentals(){
        $statement = $this->db->prepare('SELECT RentalID, name, surname, time_rented, title, status, time_rented + INTERVAL days DAY AS time_return FROM rentals LEFT JOIN movies ON rentals.fk_ID = movies.ID LEFT JOIN membership ON rentals.fk_MembershipID = membership.MembershipID WHERE status = 0 ORDER BY time_rented ASC');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getRentalById($id){
        if(isset($this->id)){
            $statement = $this->db->prepare('SELECT * FROM rentals WHERE id = :id');
            $statement->bindParam(':id', $id);
            $statement->execute();
            return $statement->fetchAll();
        }
    }
    
    public function saveNewRental($movie, $membership){
        $statement = $this->db->prepare('INSERT INTO rentals (name, surname, email, phone, fk_ID, fk_MembershipID, status, time_rented) VALUES (:firstname, :surname, :email, :phone, :id, :memid, 0, CURDATE())');
        $statement->bindParam(':firstname', $this->firstname);
        $statement->bindParam(':surname', $this->surname);
        $statement->bindParam(':email', $this->email);
        $statement->bindParam(':phone', $this->phone);
        $statement->bindParam(':id', $movie->id);
        $statement->bindParam(':memid', $membership->id);
        $statement->execute();
    }

    public function saveEditedRental($movie, $membership){
        $statement = $this->db->prepare('UPDATE rentals SET WHERE');
    }
    
}