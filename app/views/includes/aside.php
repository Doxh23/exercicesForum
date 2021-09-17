<?php
    require('../app/models/login.php');
    $log = new Login;
    $log->redirect($_REQUEST['username'],$_REQUEST['password']);
?>
<aside>
    <section class="c-aside-search">
        <input class="search-bar-aside" placeholder="Search" type="text">
        <button class="btn-search-aside"><i class="fas fa-search"></i></button>
        <button class="aside-cog"><i class="fas fa-cog"></i></button>
        <!-- <div class="form-group">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search">
                <span><button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button></span>
            </div>
        </div>                 -->
    </section>
    <hr id="separation">
    <section class="c-aside-login">
        <div class="login__container">
            <div class="msg-info d-flex">
                <span>login - register</span>
                <!-- <div class="btn-hide">
                    <button>-</button>
                </div> -->
            </div>
            <?php require('../app/views/users/login.php');?>
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
                <div class="user" id="user-1">
                    <div class="user-img-status">
                        <img src="https://robohash.org/random2" alt="">
                        <span class="statusActive"></span>
                    </div>
                    <div class="user-info">
                        <span class="username">#tonGrosFiak</span>
                        <span class="user-about">Here to help</span>
                    </div>
                </div>
                <div class="user" id="user-2">
                    <div class="user-img-status">
                        <img src="https://robohash.org/random3" alt="">
                        <span class="statusOqp"></span>
                    </div>
                    <div class="user-info">
                        <span class="username">#tonGrosFiak</span>
                        <span class="user-about">Here to help</span>
                    </div>
                </div>
                <div class="user" id="user-3">
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
</aside>