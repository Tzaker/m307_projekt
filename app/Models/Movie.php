<?php

class Movie {

    public $id;
    public $title;
    public $db;

    public function __construct($id = null, $title = null){
        $this->id = $id;
        $this->title = $title;

        $this->db = connectToDatabase();
    }

    public function getAllMovies(){
        $statement = $this->db->prepare('SELECT * FROM movies');
        $statement->execute();
        return $statement->fetchAll();
    }

}