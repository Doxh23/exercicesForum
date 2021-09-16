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
    <main>
        <section class="comments-main">
            <div class="container  rounded">
                <div class="row comments-positions">
                    <div class="col-lg-12 comments-rubrique ">
                        <div class="row ">
                            <p class="comments-container-nav"><i class="fas fa-home"></i> Home < Board Index < Board Categorie One < Topic icon Demos < topic read(hot) </p>
                        </div>
                        <div class="row ">
                            <h2 class="comments-topic-title">Topic Read (Hot)</h2>
                        </div>
                        <div class="row   comments-col-title">
                            <h3 class="comments-title-bis">Forum Rules (Hot)</h3>
                        </div>
                        <div class="row  comments-button-comment">
                            <button class="comments-post-reply">post reply</button>
                            <button class="comments-wrench"><i class="fas fa-wrench"></i></button>
                            <input class="comments-search-topic" placeholder="Search this topic..." type="text"><button class="comments-search"><i class="fas fa-search"></i></button><button class="comments-cog"><i class="fas fa-cog"></i></button>
                        </div>
                        <div class="row   box-comments">
                            <?php
                                $mess1 = new Messages;
                                $mess1->setMessages();
                            ?> 
                        </div>
                        <div class="bottomTools">
                            <div class="test">
                                <div class="col-6  button-bot ">
                                    <button class="comments-post-reply">Post reply <i class="fas fa-long-arrow-alt-left"></i></button>
                                    <button class="comments-wrench"><i class="fas fa-wrench"></i></button>
                                </div>
                                <div class="offset-1 text-end d-flex justify-content-end">
                                    <p>
                                        1 post- pages 1 of 1
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6  return">
                                    return to "topic Icon Demons"
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require ('../app/views/includes/aside.php');?>
</body>
</html>

