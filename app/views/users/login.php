<?php
    $login = new Login;
    $login->redirect($_REQUEST['username'],$_REQUEST['password'])
?>

<form action = "<?=URLROOT?>/users/login" method = "POST">
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