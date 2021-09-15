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
    <link rel="stylesheet" href="/public/css/screen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?=$data['title']?></title>
</head>
<body>
    <?php require ('../app/views/includes/header.php');?>
    <?php $mess1->getprofil($_SESSION["username"]);?>
    <?php require ('../app/views/includes/footer.php');?>
</body>
</html>