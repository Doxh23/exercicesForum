<?php 
    require ('../app/models/categories.php');
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
        <section class="c-main-categories">
            <div class="categories__container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Board index</li>
                    </ol>
                </nav>
                <div class="category">
                    <h1>category one</h1>
                    <div class="category__container">
                        <div class="row">
                            <?php 
                                $cat1 = new Categories;
                                $cat1->setCategories(0);
                            ?>
                        </div>   
                    </div>
                </div>
                <div class="category">
                    <h1>category two</h1>
                    <div class="category__container">
                        <div class="row">
                        <?php 
                                $cat2 = new Categories;
                                $cat2->setCategories(1);
                            ?>
                        </div>
                    </div>   
                </div>
                <div class="category">
                    <h1>category three</h1>
                    <div class="category__container">
                        <div class="row">
                        <?php 
                                $cat3 = new Categories;
                                $cat3->setCategories(2);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <aside>
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
        </aside>
    </main>
    <?php require ('../app/views/includes/footer.php');?>
</body>
</html>