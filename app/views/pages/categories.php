<?php
    echo $_SESSION["username"];
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
                <div class="row ">
                    <p class="categories-container-nav"><i class="fas fa-home"></i> Home < Board Index < Board Categorie One < Topic icon Demos < topic read(hot) </p>
                </div>
                <div class="category">
                    <h1>category one</h1>
                    <div class="category__container">
                        <div class="row">
                            <?php 
                                $cat1 = new Categories;
                                $cat1->setCategories(1);
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
                                $cat2->setCategories(2);
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
                                $cat3->setCategories(3);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require ('../app/views/includes/aside.php');?>
    </main>
    <?php require ('../app/views/includes/footer.php');?>
</body>
</html>