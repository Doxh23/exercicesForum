<?php
    $login = new Login;
    $login->redirect($_REQUEST['username'],$_REQUEST['password'])
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
<body class="rezet">
    <main class="w-100 h-100 bg-transparent">
        <section class="c-main-login">
            <h1>tracker - login</h1>
            <div class="login__container">
            <?php require ('../app/views/users/login.php');?>
            </div>
        </section>
    </main>
</body>
</html>

