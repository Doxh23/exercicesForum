<?php

class profil {

    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    
    //Test (database and table needs to exist before this works)
    // public function redirect($username,$psw,$signature){
    //     $this->$username = $username;
    //     $this->$psw = $psw;
    //     $this->$signature = $signature;
    //     $con = User::getConnexion($username,$psw);
    //     if ($con){
    //         $_SESSION["username"]=$username;
    //         header('Location: ../../pages/profil'); 
    //         exit;
    //     } else {
    //         echo 'problem problem problem';
    //     }
    // }

    public function getprofil($username) {

        $this->db->query("SELECT * FROM users WHERE nickname='$username'");

        $result = $this->db->resultSet();
        $arrayOfResult = [];
        foreach($result as  $a => $a_value){
            $arrayOfResult = (array)$result[$a];
            
            $template =
            '<form action="" method="post">
            <label for="note"> </label> <br>
            <input name="username" value="'.$_SESSION["username"]. ' '.'"type=""> <br>
            <input name="password" type="password" value="'.$arrayOfResult["password"].'" type=""> <br>
            <input name="signature" value="'.$arrayOfResult["signature"].'" type=""> <br>
            <button id="change"> click me </button>
            </form>';
        
            echo $template;
            
    }
    if(isset($_POST['username'])){
        if (isset($_POST['password'])){
            if (isset($_POST['signature'])){
                
        $nickname = $_POST['username'];
        $password = $_POST['password'];
        $signature = $_POST['signature'];
        $this->db->query("UPDATE users set nickname='$nickname',signature='$signature',password='$password' where nickname='$username'");
        $change = $this->db->resultSet();
        $_SESSION["username"]=$nickname;
        echo "<script>
        alert('informations changés')
        </script>";
        
        
            }
        }
    }
}
}




