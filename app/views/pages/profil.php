<?php
if (isset($_POST['submit'])){
    header('Refresh:1;url='.URLROOT.'/pages/profil');
   echo  '<meta http-equiv="refresh" content="5" />';
}
require ('../app/models/profil.php');
$mess1 = new profil;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$mess1->getprofil($_SESSION["username"]);
?>
</body>
</html>