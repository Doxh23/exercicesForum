<?php
    require_once'../app/require.php'
?>
<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/screen.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="bg-image"></div>
            <div class="gradient-custom-header">
                <div class="btn-login">
                    <button type="button" class="btn btn-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>Register</button>
                    <button type="button" class="btn btn-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>Login</button>
                </div>
                <div class="title">
                    <div class="d-flex justify-content-center align-items-center">
                        <h1 class="text-white mb-0">Tracker</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
                    <div class="category__container d-flex">
                        <div class="category__cards">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                                    <div class="cat-card mb-3">
                                        <div class="cat-card-header">
                                            <div class="cat-card-img">
                                                <img src="https://robohash.org/random" alt="">
                                            </div>
                                            <div class="cat-card-text">
                                                <h1>coucou</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                        <div class="cat-card-main d-flex">
                                            <div class="nTopics">
                                                <span class="number">459</span>
                                                <span class="type">Topics</span>
                                            </div>
                                            <div class="nPosts">
                                                <span class="number">900</span>
                                                <span class="type">Posts</span>
                                            </div>
                                            <div class="lastPost">
                                                <span class="date">date</span>
                                                <span class="type">last Post</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                                    <div class="cat-card">
                                        <div class="cat-card-header">
                                            <div class="cat-card-img">
                                                <img src="https://robohash.org/random" alt="">
                                            </div>
                                            <div class="cat-card-text">
                                                <h1>coucou</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                        <div class="cat-card-main d-flex">
                                            <div class="nTopics">
                                                <span class="number">459</span>
                                                <span class="type">Topics</span>
                                            </div>
                                            <div class="nPosts">
                                                <span class="number">900</span>
                                                <span class="type">Posts</span>
                                            </div>
                                            <div class="lastPost">
                                                <span class="date">date</span>
                                                <span class="type">last Post</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                                    <div class="cat-card">
                                        <div class="cat-card-header">
                                            <div class="cat-card-img">
                                                <img src="https://robohash.org/random" alt="">
                                            </div>
                                            <div class="cat-card-text">
                                                <h1>coucou</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                        <div class="cat-card-main d-flex">
                                            <div class="nTopics">
                                                <span class="number">459</span>
                                                <span class="type">Topics</span>
                                            </div>
                                            <div class="nPosts">
                                                <span class="number">900</span>
                                                <span class="type">Posts</span>
                                            </div>
                                            <div class="lastPost">
                                                <span class="date">date</span>
                                                <span class="type">last Post</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                                    <div class="cat-card">
                                        <div class="cat-card-header">
                                            <div class="cat-card-img">
                                                <img src="https://robohash.org/random" alt="">
                                            </div>
                                            <div class="cat-card-text">
                                                <h1>coucou</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                        <div class="cat-card-main d-flex">
                                            <div class="nTopics">
                                                <span class="number">459</span>
                                                <span class="type">Topics</span>
                                            </div>
                                            <div class="nPosts">
                                                <span class="number">900</span>
                                                <span class="type">Posts</span>
                                            </div>
                                            <div class="lastPost">
                                                <span class="date">date</span>
                                                <span class="type">last Post</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                                    <div class="cat-card">
                                        <div class="cat-card-header">
                                            <div class="cat-card-img">
                                                <img src="https://robohash.org/random" alt="">
                                            </div>
                                            <div class="cat-card-text">
                                                <h1>coucou</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                        <div class="cat-card-main d-flex">
                                            <div class="nTopics">
                                                <span class="number">459</span>
                                                <span class="type">Topics</span>
                                            </div>
                                            <div class="nPosts">
                                                <span class="number">900</span>
                                                <span class="type">Posts</span>
                                            </div>
                                            <div class="lastPost">
                                                <span class="date">date</span>
                                                <span class="type">last Post</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                <div class="category">
                    <h1>category two</h1>
                    <div class="category__container d-flex">
                        <div class="category__cards">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                                    <div class="cat-card mb-3">
                                        <div class="cat-card-header">
                                            <div class="cat-card-img">
                                                <img src="https://robohash.org/random" alt="">
                                            </div>
                                            <div class="cat-card-text">
                                                <h1>coucou</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                        <div class="cat-card-main d-flex">
                                            <div class="nTopics">
                                                <span class="number">459</span>
                                                <span class="type">Topics</span>
                                            </div>
                                            <div class="nPosts">
                                                <span class="number">900</span>
                                                <span class="type">Posts</span>
                                            </div>
                                            <div class="lastPost">
                                                <span class="date">date</span>
                                                <span class="type">last Post</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                                    <div class="cat-card">
                                        <div class="cat-card-header">
                                            <div class="cat-card-img">
                                                <img src="https://robohash.org/random" alt="">
                                            </div>
                                            <div class="cat-card-text">
                                                <h1>coucou</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                        <div class="cat-card-main d-flex">
                                            <div class="nTopics">
                                                <span class="number">459</span>
                                                <span class="type">Topics</span>
                                            </div>
                                            <div class="nPosts">
                                                <span class="number">900</span>
                                                <span class="type">Posts</span>
                                            </div>
                                            <div class="lastPost">
                                                <span class="date">date</span>
                                                <span class="type">last Post</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                <div class="category">
                    <h1>category three</h1>
                    <div class="category__container d-flex">
                        <div class="category__cards">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                                    <div class="cat-card mb-3">
                                        <div class="cat-card-header">
                                            <div class="cat-card-img">
                                                <img src="https://robohash.org/random" alt="">
                                            </div>
                                            <div class="cat-card-text">
                                                <h1>coucou</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                        <div class="cat-card-main d-flex">
                                            <div class="nTopics">
                                                <span class="number">459</span>
                                                <span class="type">Topics</span>
                                            </div>
                                            <div class="nPosts">
                                                <span class="number">900</span>
                                                <span class="type">Posts</span>
                                            </div>
                                            <div class="lastPost">
                                                <span class="date">date</span>
                                                <span class="type">last Post</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                                    <div class="cat-card">
                                        <div class="cat-card-header">
                                            <div class="cat-card-img">
                                                <img src="https://robohash.org/random" alt="">
                                            </div>
                                            <div class="cat-card-text">
                                                <h1>coucou</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                        <div class="cat-card-main d-flex">
                                            <div class="nTopics">
                                                <span class="number">459</span>
                                                <span class="type">Topics</span>
                                            </div>
                                            <div class="nPosts">
                                                <span class="number">900</span>
                                                <span class="type">Posts</span>
                                            </div>
                                            <div class="lastPost">
                                                <span class="date">date</span>
                                                <span class="type">last Post</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <footer>
        <div class="gradient-custom-footer">
            <div class="d-flex flex-wrap justify-content-center">
                <a class="social d-flex justify-content-center align-items-center" href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="social d-flex justify-content-center align-items-center" href="https://www.apple.com/" target="_blank"><i class="fab fa-apple"></i></a>
                <a class="social d-flex justify-content-center align-items-center" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="social d-flex justify-content-center align-items-center" href="https://codepen.io/" target="_blank"><i class="fab fa-codepen"></i></a>
                <a class="social d-flex justify-content-center align-items-center" href="#"><i class="fab fa-google-plus-g"></i></a>
                <a class="social d-flex justify-content-center align-items-center" href="https://digg.com/" target="_blank"><i class="fab fa-digg"></i></a>
                <a class="social d-flex justify-content-center align-items-center" href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
        <div class="foot-info">
            <div class="d-flex flex-nowrap justify-content-between align-items-center">
                <nav class="nav-footer" style="--bs-breadcrumb-divider: '<';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="nav-breadcrumb" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>Home</a></li>
                    <li class="breadcrumb-item"><a class="nav-breadcrumb" href="#">Topics</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Comments</li>
                    </ol>
                </nav>
                <div class="d-flex flex-wrap" id="list-foot">
                    <a class="foot-contact" href="#"><i class="fas fa-envelope"></i>Contact us</a>
                    <a class="foot-contact" href="#"><i class="fas fa-shield-alt"></i>The team</a>
                    <a class="foot-contact" href="#"><i class="fas fa-check"></i>Terms</a>
                    <a class="foot-contact" href="#"><i class="fas fa-lock"></i>Privacy</a>
                    <a class="foot-contact" href="#"><i class="fas fa-users"></i>Members</a>
                    <a class="foot-contact" href="#"><i class="fas fa-trash-alt"></i>Delete cookies</a>
                    <p class="time">All times are UTC</p>
                </div>
            </div>
        </div>
        <div class="credit-foot">
            <div class="d-flex flex-wrap">
                <p class="credits">Powered by <a href="#">phpBB™</a> • </p>
                <p class="credits">Design by <a href="#">PlanetStyles</a></p>
            </div>
        </div>
    </footer>
    <script src="dist/main.js"></script>
</body>
</html> -->