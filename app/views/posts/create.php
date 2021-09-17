<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/screen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo SITENAME ?></title>
</head>
<body>
    <?php require ('../app/views/includes/header.php');?>
    <main class="layout__main">
        <section class="components__form">
            <h1 class="form__heading">Create new topic in board <?php echo $_GET["board"] ?></h1>
            <form action="<?php echo URLROOT; ?>/posts/create" method="POST">
                <label for="title" class="form__label--title">Title of the topic:</label>
                <br>    
                <input type="text" class= "form__input--title" name="title" id="name">
                <br>
                <span class="invalidFeedback">
                    <?php echo $data['titleError'] ?>
                </span>
                <br>
                <label for="body" class="form__label--body">Content of the topic:</label>
                <br>
                <textarea name="body" class="form__input--body" id="body"placeholder="Write here the body of your post..."></textarea>
                <br>
                <span class="invalidFeedback">
                    <?php echo $data['bodyError'] ?>
                </span>
                <input name="board_id" type="number" style="display:none" value ="<?php echo $_GET["board"] ?>">
                <br>
                <button name="submit" type="submit" class="btn-block btn-color rounded-pill py-2">Submit topic</button>
            </form>
        </section>
        <?php require ('../app/views/includes/aside.php');?>
    </main>
    <?php require ('../app/views/includes/footer.php');?>
</body>
</html>
