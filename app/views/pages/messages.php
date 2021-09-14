<?php 
  require ('../app/models/messages.php');
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
                                <div class="col-5  offset-1 text-end ">
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
<!-- <aside>
            <section class="c-aside-search">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                        <span><button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button></span>
                     </div>
                </div>                
            </section>
            <section class="c-aside-login">
                <div class="login__container">
                    <div class="msg-info d-flex">
                        <span>
                            login - register
                        </span>
                        <div class="btn-hide">
                            <button>-</button>
                        </div>
                    </div>
                    <div class="form-group"> <label class="form-control-label text-muted">Username</label> <input type="text" id="email" name="email" placeholder="Phone no or email id" class="form-control rounded-pill"> </div>
                    <div class="form-group"> <label class="form-control-label text-muted ">Password</label> <input type="password" id="psw" name="psw" placeholder="Password" class="form-control rounded-pill"> </div>
                    <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color rounded-pill py-2">Log in</button> </div>
                    <div class="row justify-content-center my-2"> <a href="#"><small class="text-muted">Forgot Password?</small></a> </div>
                </div>
            </section>
            <section class="c-aside-posts">
                <div class="posts__container">
                    <div class="card">
                        <div class="card-header">
                          last posts
                        </div>
                        <div class="card-body">
                            <div class="post">
                                <div class="latestPosts">
                                    <div class="latestInfo">
                                        <div class="latest">
                                          <h1>Post - category 3</h1>
                                          <span class="latestTime">2 hours ago</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, ipsam.</p>
                                        <span class="tags">tag1,tag2,tag3</span>
                                    </div>
                                  </div>
                            </div>
                            <div class="post">
                                <div class="latestPosts">
                                    <div class="latestInfo">
                                        <div class="latest">
                                          <h1>Post - category 3</h1>
                                          <span class="latestTime">2 hours ago</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, ipsam.</p>
                                        <span class="tags">tag1,tag2,tag3</span>
                                    </div>
                                  </div>
                            </div>
                            <div class="post">
                                <div class="latestPosts">
                                    <div class="latestInfo">
                                        <div class="latest">
                                          <h1>Post - category 3</h1>
                                          <span class="latestTime">2 hours ago</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, ipsam.</p>
                                        <span class="tags">tag1,tag2,tag3</span>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="c-aside-activeUsers">
                <div class="card">
                    <div class="card-header">
                      last active users
                    </div>
                    <div class="card-body d-flex">
                        <div class="user">
                            <div class="user-img-status">
                                <img src="https://robohash.org/random2" alt="">
                                <span class="statusActive"></span>
                            </div>
                            <div class="user-info">
                                <span class="username">#tonGrosFiak</span>
                                <span class="user-about">Here to help</span>
                            </div>
                        </div>
                        <div class="user">
                            <div class="user-img-status">
                                <img src="https://robohash.org/random3" alt="">
                                <span class="statusOqp"></span>
                            </div>
                            <div class="user-info">
                                <span class="username">#tonGrosFiak</span>
                                <span class="user-about">Here to help</span>
                            </div>
                        </div>
                        <div class="user">
                            <div class="user-img-status">
                                <img src="https://robohash.org/random2" alt="">
                                <span class="statusAbsent"></span>
                            </div>
                            <div class="user-info">
                                <span class="username">#tonGrosFiak</span>
                                <span class="user-about">Here to help</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside> -->
    </main>
    <?php require ('../app/views/includes/footer.php');?>
</body>
</html>

