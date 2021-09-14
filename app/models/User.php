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
               
                $DBuser = $this->db->query("SELECT nickname FROM `users` WHERE password='$psw'");
                $DBuser = $this->db->resultSet();
    
                $DBpsw = $this->db->query("SELECT password FROM users WHERE nickname='$username'");
                $DBpsw = $this->db->resultSet();

                foreach($DBuser as  $a => $a_value){
                    $dbUser = (array)$DBuser[$a];
                }
                foreach($DBpsw as  $b => $b_value){
                    $dbPsw = (array)$DBpsw[$b];
                }

                if ($username == $dbUser['nickname'] && $psw == $dbPsw['password']){
                    return true;
                } else {
                    return false;
                }
            }
        }

        public function redirect($username,$psw){
            $this->$username = $username;
            $this->$psw = $psw;

            $dbMail =[];
            $dbAvatar =[];
            $dbSignature =[];
            $dbId =[];

            $DBmail = $this->db->query("SELECT email FROM users WHERE nickname='$username'");
            $DBmail = $this->db->resultSet();

            $DBavatar = $this->db->query("SELECT avatar FROM users WHERE nickname='$username'");
            $DBavatar = $this->db->resultSet();

            $DBsignature = $this->db->query("SELECT signature FROM users WHERE nickname='$username'");
            $DBsignature = $this->db->resultSet();

            $DBid = $this->db->query("SELECT id FROM users WHERE nickname='$username'");
            $DBid = $this->db->resultSet();
            
            foreach($DBmail as  $c => $c_value){
                $dbMail = (array)$DBmail[$c];
            }
            foreach($DBavatar as  $d => $d_value){
                $dbAvatar = (array)$DBavatar[$d];
            }   
            foreach($DBsignature as  $e => $e_value){
                $dbSignature = (array)$DBsignature[$e];
            }
            foreach($DBid as  $f => $f_value){
                $dbId = (array)$DBid[$f];
            }
            $con = $this->getConnexion($username,$psw);
            if ($con){
                header('Location: ../../pages/categories');
                $_SESSION["username"]=$username;
                $_SESSION["id"]=$dbId['id'];
                $_SESSION["email"]=$dbMail['email'];
                $_SESSION["avatar"]=$dbAvatar['avatar'];
                $_SESSION["signature"]=$dbSignature['signature'];
                 
                exit;
            } else {
                echo 'problem problem problem';
            }
        }
    }
