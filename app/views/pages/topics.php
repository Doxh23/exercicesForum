<?php 
    $topics = new Topics();
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
    <div class="modal hidden">
        <form action="addTopics.php" method="POST">


            <input type="submit">
        </form>
    </div>
    <main class="layout__main">
            <div class=" main__row row">
                <div class="main__containerLeft">
                    <div class="container">
                        <div class="row ">
                            <p class="topics-container-nav"><i class="fas fa-home"></i> Home < Board Index < Board Categorie One < Topic icon Demos</p>
                        </div>
                        <!-- <div class="components__breadcrumb row">
                            <nav class="breadcrumb__items ">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                    <i class="fas fa-home"></i> Home
                                    </li>
                                    <li class="breadcrumb-item">
                                        Level 1
                                    </li>
                                    <li class= "breadcrumb-item">
                                        Level 2
                                    </li>
                                    <li class= "breadcrumb-item">
                                        Level 3
                                    </li>
                                </ul>
                            </nav>
                        </div> -->

                        <div class="main__heading"> 
                            <h1 class="heading__title">
                                Topic Icon Demos
                            </h1>
                        </div>

                        <section class="components__rules">
                            <div class="rules__header">
                                <button class="rules_collapse" type="button" data-bs-toggle="collapse" data-bs-target="#forumRules" aria-expanded="false" aria-controls="forumRules">
                                    Forum rules
                                </button>
                            </div>
                            <div class="collapse" id="forumRules"> 
                                <ul class="rules__content">
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    </li>
                                </ul>
                            </div>

                        </section>

                        <div class="components__toolbarTop">
                            <div class="row row-cols-2">

                                <div class="toolbar__create col-lg-3 d-flex align-items-center">
                                    <?php if (!empty($_SESSION["username"])): ?>
                                        <a href="<=URLROOT?>/posts/create" class="button redirect">New Topic <i class="fas fa-pen"></i></a>
                                    <?php endif; ?>
                                </div>

                                <div class="toolbar__search col-lg-6 d-flex align-items-center">
                                    <div class="row">
                                        <nav class="searchbar">
                                            <form method="GET" action="" class="row row-cols-3 searchform">
                                                <input class="search-forum" placeholder="Search this forum..." type="text"><button class="search-lens"><i class="fas fa-search"></i></button><button class="search-conf"><i class="fas fa-cog"></i></button>
                                            </form>
                                        </nav>
                                    </div>
                                </div>

                                <div class="toolbar__count col-12 col-lg-3">
                                    $topicsCount &bull;
                                    <!-- echo "Page".$currentPageNumber." of ".$totalPagesNumber -->
                                    $page of $pages
                                </div>
                            
                            </div>
                        </div>

                        <section class="components__announcements">
                            <div class="section__header">    
                                <div class="row row-cols-4 header_elements">
                                    <div class="col-7 col-sm-7">
                                        <p>Announcements</p>
                                    </div>
                                    <div class="col-1 col-sm-1">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="col-1 col-sm-1">
                                        <i class="far fa-eye"></i>
                                    </div>
                                    <div class="col-3 col-sm-3">
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="section__body">
                                <div class="articles__container">
                                    <article class="section__article row row-cols-5">
                                        <div class="col-1 col-sm-1">
                                            <img class="article__status" src="" alt="STATUS">
                                        </div>
                                        <div class="article__description col-6 col-sm-6 ">
                                            <h3 class="description__title">
                                                $articleTitle
                                            </h3>
                                            <div class="description__authorAndGroup row">
                                                <p class="description__author col-sm">
                                                    by $articleAuthor
                                                </p>
                                                <p class="description__group col-sm">
                                                    in $articleGroup
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-1 col-sm-1">
                                            <p class="article__commentsCount">
                                                <!-- $articleCommentsCount -->
                                                $
                                            </p>
                                        </div>
                                        <div class="col-1 col-sm-1">
                                            <p class="article__viewsCount">
                                                <!-- $articleViewsCount -->
                                                $
                                            </p>
                                        </div>
                                        <div class="col-3 col-sm">
                                            <div class="article__authorAndDate">
                                                <p class="article__author">
                                                    by $articleAuthor
                                                </p>
                                                <p class="article__date">
                                                    in $articleDate
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>

                        </section>

                        <section class="components__topics">
                            <div class="section__header">    
                                <div class="row row-cols-4 header_elements">
                                    <div class="col-7 col-sm-7">
                                        <p>Topics</p>
                                    </div>
                                    <div class="col-1 col-sm-1">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="col-1 col-sm-1">
                                        <i class="far fa-eye"></i>
                                    </div>
                                    <div class="col-3 col-sm-3">
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="section__body">
                                <div class="articles__container">
                                    <?php
                                        if(isset($_GET['category']) && isset($_GET['board'])){
                                            $topics->setTopics();
                                        } else {
                                            echo "Il n'y a rien à afficher ici, déso frère";
                                        }
                                    ?>
                                </div>
                            </div>

                        </section>

                        <div class="components__toolbarBottom">
                            <div class="row row-cols-2">

                                <div class="toolbar__create col-lg-3 d-flex justify-content-center align-items-center">
                                    <button class="button">
                                        New Topic <i class="fas fa-pen"></i>
                                    </button>
                                </div>
                                <div class="toolbar__sort col-lg-5">
                                    <form method="GET" action="">
                                        <select class="sort__options" name="sort" id="sort">
                                            <option value="DESC">
                                                <i class="fas fa-sort-amount-down-alt">DESC</i>
                                            </option>
                                            <option value="ASC">
                                                <i class="fas fa-sort-amount-up-alt">ASC</i>
                                            </option>
                                        </select>
                                    </form>
                                </div>

                                <div class="toolbar__count col-12 col-lg-4">
                                    $topicsCount &bull;
                                    <!-- echo "Page".$currentPageNumber." of ".$totalPagesNumber -->
                                    $page of $pages
                                </div>
                            
                            </div>
                        </div>

                        <div class="components__container row d-flex justify-content-end">

                            <!-- <div class="components__breadcrumb col">
                                <div class="breadcrumb__icon">
                                    <!-- CODE FOR HOME ICON 
                                </div>
                                <nav class="breadcrumb__items ">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            Home
                                        </li>
                                        <li class="breadcrumb-item">
                                            Level 1
                                        </li>
                                        <li class= "breadcrumb-item">
                                            Level 2
                                        </li>
                                        <li class= "breadcrumb-item">
                                            Level 3
                                        </li>
                                    </ul>
                                </nav>
                            </div> -->

                            <div class="toolbar__jump col-3">
                                <!-- DUMMY DROPDOWN MENU -->
                                <form method="GET" action="">
                                    <select class="jump__options" name="jump" id="jump">
                                        <option value="Home">
                                            Homepage
                                        </option>
                                        <option value="Topics">
                                            Topics
                                        </option>
                                    </select>
                                    <button class="redirectionBottom" name="" type="submit">
                                        Go
                                    </button>
                                </form>
                            </div>
                        
                        </div>
                    </div>
                </div>

                <!-- <aside class="main__containerRight col-lg-3">
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
            
            </div>
        <?php require ('../app/views/includes/aside.php');?>
    </main>
    <?php require ('../app/views/includes/footer.php');?>
</body>
</html>

