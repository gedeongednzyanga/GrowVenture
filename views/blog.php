<?php
    include('views/cal_time.php');
    //categories news
    $categoryNewManager = new CategoryNewManager();
    $categoriesNew = $categoryNewManager->getAllCategories();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GrowVenture | Blog </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include('header.php') ?>
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="views/assets/img/logo/logoGv.png" alt="Logo">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->

    <header>
        <!-- Header Start -->
        <?php include('header_area.php'); ?>
        <!-- Header End -->
    </header>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="views/assets/img/hero/Industries_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Our Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php foreach ($news as $new): ?>
                        <article class="blog_item">
                            <div class="single-item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="views/assets/news_post/<?= $new->getImage() ?>"
                                        height="375" width="750" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>Date</h3>
                                        <p><?= $new->getDatepub() ?></p>
                                    </a>
                                </div>
                                <?php  $newManager = new NewManager(); ?>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="views/single?idn=<?= $new->getIdn() ?>">
                                        <h2><?= $new->getTitle()?></h2>
                                    </a>
                                    <p><?= $new->getContent()?></p>
                                    <ul class=" blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="views/single?idn=<?= $new->getIdn() ?>"><i
                                                    class="fa fa-comments"></i>
                                                <?= $newManager->countComment($new->getIdn()); ?> Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <?php foreach($categoriesNew as $categoryNew): ?>
                                <li>
                                    <a href="<?= $categoryNew->getIdcat() ?>" class="d-flex">
                                        <p><?= $categoryNew->getDesignation() ?></p>
                                        <p class="badge"> <?= $categoryNewManager->countNew($categoryNew->getIdcat()) ?>
                                        </p>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <?php 
                            foreach($newManager->recentNews("news") as $recentNew): ?>
                            <div class="media post_item">
                                <img src="views/assets/img/post/post_1.png" alt="post">
                                <div class="media-body">
                                    <a href="views/single?idn=<?= $recentNew->getIdn() ?>">
                                        <h3><?= $recentNew->getTitle() ?></h3>
                                    </a>
                                    <p><?= cal_time_ago($recentNew->getDatepub()) ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <?php include("footer.php") ?>
</body>

</html>