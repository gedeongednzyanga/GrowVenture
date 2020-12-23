<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GrowVenture | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
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
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i>Goma, North-Kivu, DRC</li>
                                        <li><i class="fas fa-envelope"></i>growventure2@gmail.com</li>
                                        <li><i class="fas fa-phone"></i>+243 998 435 328, 812 287 927</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky" id="menu">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                    <a href="<?= URL ?>"><img src="views/assets/img/logo/logoGv.png" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="home">Home</a></li>
                                            <li><a href="services">Services</a></li>
                                            <li><a href="cases">Cases</a></li>
                                            <li><a href="blog">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog">Blog</a></li>
                                                    <li><a href="singleblog">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="login">Connexion</a>
                                                <ul class="submenu">
                                                    <li><a href="login">Login</a></li>
                                                    <li><a href="register">Create Acount</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about">About</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="contact" class="btn header-btn">Contact Now</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="views/assets/images/growventuremain.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <p data-animation="fadeInLeft" data-delay=".4s">Welcome to GrowVenture</p>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s">We help you to grow your business</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="industries.html" class="btn hero-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height d-flex align-items-center" data-background="views/assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <p data-animation="fadeInLeft" data-delay=".4s">Welcome to GrowVenture</p>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s">We help you to grow your business</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="industries.html" class="btn hero-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="views/assets/img/team/team_1.jpg" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4><a href="#">Business Planning</a></h4>
                                    <p>La gestion à l’affaire dans GrowVenture et notamment le planning d’affaires, permet de répondre...
                                        <a href="#" class="text-danger">En savoir plus</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="views/assets/img/team/team_2.jpg" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4><a href="#">Financial Projections</a></h4>
                                    <p>Le plan d’affaires est l’un des piliers les plus importants de toute nouvelle entreprise, et les projections ...
                                        <a href="#" class="text-danger">En savoir plus</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-profile mb-30">
                            <!-- Back -->
                            <div class="single-profile-back-last">
                                <h2>Ce que nous faisons pour vous</h2>
                                <p>Nous vous prêtons de l'argent pour développer votre business et agrandir votre entreprise.</p>
                                <a href="#">Voir plus »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        <!-- We Trusted Start-->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="trusted-img">
                            <img src="views/assets/img/team/wetrusted.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="trusted-caption">
                            <h2>Nous sommes plus fiables que 5000 clients</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru dolor sit amet, consectetur adipn.</p>
                            <a href="#" class="btn trusted-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- We Trusted End-->

        <!-- services Area Start-->
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-icon">
                                <span class="flaticon-checklist"></span>
                            </div>
                            <div class="services-caption">
                                <h4>Strategic Planning</h4>
                                <p>La planification stratégique est un processus de développement des stratégies pour atteindre un objectif fixé.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-icon">
                                <span class="flaticon-audit"></span>
                            </div>
                            <div class="services-caption">
                                <h4>Trades & stocks</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-icon">
                                <span class="flaticon-checklist-1"></span>
                            </div>
                            <div class="services-caption">
                                <h4>Audit & Assurance</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- button -->
                <div class="row justify-content-center">
                    <div class="room-btn pt-50">
                        <a href="services" class="border-btn">More Services</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- services Area End-->

        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container-fluid">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3>Completed Cases</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali quUt enim ad minim veniam. quis nostrud exercitation ullamco laboris nierci si ut.</p>
                            <a href="gallery.html" class="border-btn border-btn2">See more</a>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class=" completed-active owl-carousel">
                            <div class="single-cases-img">
                                <img src="views/assets/img/service/completed_case_1.png" alt="">
                                <!-- img hover caption -->
                                <div class="single-cases-cap">
                                    <h4><a href="case_details.html">Marketing Strategy</a></h4>
                                    <p>Completely impact synergistic mindshare whereas premium services.</p>
                                    <span>Advisory</span>
                                </div>
                            </div>
                            <div class="single-cases-img">
                                <img src="views/assets/img/service/completed_case_2.png" alt="">
                                <!-- img hover caption -->
                                <div class="single-cases-cap">
                                    <h4><a href="case_details.html">Marketing Strategy</a></h4>
                                    <p>Completely impact synergistic mindshare whereas premium services.</p>
                                    <span>Advisory</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

        <!-- Testimonial Start -->
        <div class="testimonial-area fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="views/assets/img/logo/barbuto.png" class="ani-btn " alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>You can’t succeed if you just do what others do and follow the well-worn path. You need to create a new and original path for yourself. </p>
                                    <!-- Rattion -->
                                    <div class="rattiong-caption">
                                        <span>Gédéon Nzyanga<span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="views/assets/img/logo/barbuto.png" class="ani-btn" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>You can’t succeed if you just do what others do and follow the well-worn path. You need to create a new and original path for yourself. </p>
                                    <!-- Rattion -->
                                    <div class="rattiong-caption">
                                        <span>Gédéon Nzyanga<span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <div class="recent-area section-paddingt">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Recent News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="views/assets/img/recent/rcent_1.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Business planing</span>
                                <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="views/assets/img/recent/rcent_2.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Audit</span>
                                <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="views/assets/img/recent/rcent_3.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Business planing</span>
                                <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Area End-->

        <!-- Request Back Start -->
        <div class="request-back-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="request-content">
                            <h3>Request for Call Back</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <!-- Contact form Start -->
                        <div class="form-wrapper">
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box  mb-30">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box mb-30">
                                            <input type="text" name="email" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 mb-30">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">Business Planning</option>
                                                <option value="">Financial Projections</option>
                                                <option value="">Strategic Planning</option>
                                                <option value="">Audit & Assurance</option>
                                                <option value="">Digital Solutions</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <button type="submit" class="send-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact form End -->
                </div>
            </div>
        </div>
        <!-- Request Back End -->

    </main>
    <?php include("footer.php"); ?>
</body>

</html>