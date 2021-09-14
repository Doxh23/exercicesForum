<?php
class profil {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    //Test (database and table needs to exist before this works)
    public function getprofil() {
        $this->db->query('SELECT * FROM users');

        $result = $this->db->resultSet();
        print_r($result);
        return $result;
    }
}
