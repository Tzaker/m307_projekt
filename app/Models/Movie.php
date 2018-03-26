<?php

class Movies {

    public $id;
    public $title;
    public $db;

    public function __construct($id = null, $title = null){
        $this->id = $id;
        $this->title = $title;

        $this->db = connectToDatabase();
    }
}