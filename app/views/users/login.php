<?php 
    $test = new User;
    $test->getUsers();
    $test->redirect($_REQUEST['username'],$_REQUEST['password']);


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
                <form action = "<?php $_PHP_SELF ?>" method = "POST">
                    <div class="form-group">
                        <label class="form-control-label text-muted" for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" class="form-control rounded-pill">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-muted " for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control rounded-pill">
                    </div>
                    <div class="row justify-content-center my-3 px-3">
                        <button id="btn-login"class="btn-block btn-color rounded-pill py-2">Log in</button>
                    </div>
                    <div class="row my-2 justify-content-between">
                        <a href="#">
                            <small>Register</small>
                        </a>
                        <a href="#">
                            <small>Forgot Password?</small>
                        </a>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>

