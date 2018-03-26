<?php

class Rental {

    public $id;
    public $time;
    public $status;
    public $name;
    public $surname;
    public $email;
    public $phone;

    public function __construct($id = null){
        $this->id = $id;

        $this->db = connectToDatabase();
    }

    public function getAllRentals(){
        $statement = $this->db->prepare('SELECT * FROM rentals');
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
}