<?php
class register {
    private $db;
    public function __construct (){
        $this->db = new Database;
    }
 public function getregister(){
     if(isset($_POST['submit'])){
        if(isset($_POST['username']) and isset($_POST['psw']) and isset($_POST['mail']) and isset($_POST['check-mail']) and isset($_POST['check-psw']) ){
                            if(($_POST['check-psw'] === $_POST['psw']) and ($_POST['mail'] === $_POST['check-mail'])){
                                if (filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL )) {
                                    $name = $_POST['username'];
                                    $psw = $_POST['psw'];
                                    $email = $_POST['mail'];
                                    $this->db->query("INSERT into users (nickname,email,`password`,avatar,`signature`)
                                    values ('$name','$email','$psw',null,'salut')");
                                            $change = $this->db->resultSet();


                                }
                                else{
                                    echo "<script> 
                                        alert('the format of your email is not correct') </script>";
                                }
                            }
                            else{
                                echo "<script> 
                                        alert('the password or the email is not the same as the check box') </script>";
                            }
                    
                }   
                else {
                 echo "<script> 
                 alert('pls,fill out box') </script>";

}
     }
     }
    }
?>