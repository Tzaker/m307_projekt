<?php

class Membership {

    public $id;
    public $name;
    public $days;
    public $db;

    public function __construct($id = null, $name = null, $days = null){
        $this->id = $id;
        $this->name = $name;
        $this->days = $days;

        $this->db = connectToDatabase();
    }

    public function getAllMemberships(){
        $statement = $this->db->prepare('SELECT MembershipID, m_name FROM membership');
        $statement->execute();
        return $statement->fetchAll();
    }

}