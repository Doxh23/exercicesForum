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
                <form action="<?php echo URLROOT; ?>/users/register" method="POST">
                    <div class="form-group">
                        <label class="form-control-label text-muted" for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" class="form-control rounded-pill">
                        <span class="invalid">
                            <php? 
                                echo data['userNameError'];
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-muted ">Password</label>
                        <input type="password" id="psw" name="psw" placeholder="Password" class="form-control rounded-pill">
                        <label class="form-control-label text-muted ">Check Password</label>
                        <input type="password" id="check-psw" name="check-psw" placeholder="check-Password" class="form-control rounded-pill">
                        <span class="invalid">
                            <php? 
                                echo data['pswError'];
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-muted" for="mail">mail</label>
                        <input type="text" id="mail" name="mail" placeholder="mail" class="form-control rounded-pill">
                        <label class="form-control-label text-muted" for="check-mail">check-mail</label>
                        <input type="text" id="check-mail" name="check-mail" placeholder="check-mail" class="form-control rounded-pill">
                        <span class="invalid">
                            <php? 
                                echo data['mailError'];
                            ?>
                        </span>
                    </div>
                    <div class="row justify-content-center my-3 px-3">
                        <button class="btn-block btn-color rounded-pill py-2">Log in</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>

