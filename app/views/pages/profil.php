<?php
require ('../app/models/profil.php');
echo $_SESSION["username"];
$mess1 = new profil;
$mess1->getprofil();




?>
