<?php
    class User {
        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function getUsers() {
            $this->db->query("SELECT * FROM users");

            $result = $this->db->resultSet();

            return $result;
        }
        public function getConnexion($username,$psw){
            if (isset($username,$psw)){
                $this->$username = $username;
                $this->$psw = $psw;
                $dbUser =[];
                $dbPsw =[];

                $DBuser = $this->db->query("SELECT nickname FROM `users` WHERE password='$psw'");
                $DBuser = $this->db->resultSet();

                $DBpsw = $this->db->query("SELECT password FROM users WHERE nickname='$username'");
                $DBpsw = $this->db->resultSet();

                foreach($DBuser as  $a => $a_value){
                    $dbUser = (array)$DBuser[$a];

                }
                foreach($DBpsw as  $a => $a_value){
                    $dbPsw = (array)$DBpsw[$a];

                }
                if ($username === $dbUser['nickname'] && $psw === $dbPsw['password']){
                    return true;
                } else {
                    return false;
                }
            }
        }

        public function redirect($username,$psw){
            $this->$username = $username;
            $this->$psw = $psw;
            $con = $this->getConnexion($username,$psw);
            if ($con){
                header('Location: ../../pages/categories'); 
                exit;
            } else {
                echo 'problem problem problem';
            }
        }
    }
