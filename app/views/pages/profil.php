<?php
if (isset($_POST['submit'])){
    header('Refresh:1;url='.URLROOT.'/pages/profil');
   echo  '<meta http-equiv="refresh" content="5" />';
}
$mess1 = new profil;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/screen.css">
    <title>Document</title>
</head>
<body class="rezet">
    <main class="w-100 h-100 bg-transparent">
        <section class="c-main-login">
            <h1>Edit Profil</h1>
            <div class="login__container">
                <?php 
                    $mess1->getprofil($_SESSION["username"]); 
                ?>
            </div>
        </section>
    </main>
</body>
</html>