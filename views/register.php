<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GrowVenture | Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
   <?php include('header.php') ?>
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="views/assets/img/logo/logoGv.png" alt="">
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
                    <div class=" container-fluid ">
                        <div class="row align-items-center ">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1 ">
                                <div class="logo ">
                                    <a href="<?= URL ?>"><img src="views/assets/img/logo/logoGv.png " alt=" "></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8 ">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block ">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="home">Home</a></li>
                                            <li><a href="services">Services</a></li>
                                            <li><a href="cases">Cases</a></li>
                                            <li><a href="blog">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog">Blog</a></li>
                                                    <li><a href="single-blog">Blog Details</a></li>
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
                            <div class="col-xl-2 col-lg-3 col-md-3 ">
                                <div class="header-right-btn f-right d-none d-lg-block ">
                                    <a href="contact.html" class="btn header-btn ">Contact Now</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12 ">
                                <div class="mobile_menu d-block d-lg-none "></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center " data-background="views/assets/img/hero/contact_hero.jpg ">
            <div class="container ">
                <div class="row ">
                    <div class="col-xl-12 ">
                        <div class="hero-cap text-center ">
                            <h2>Connexion</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section ">
        <div class="container ">
           
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="contact-title ">Create Acount</h2>
                </div>
                <div class="col-lg-8 ">
                    <div class="form-contact" id="registerForm">
                        <div class="row ">
                            <div class="col-sm-12 ">
                                <div class="form-group ">
                                    <input class="form-control valid " name="nom" id="name" autocomplete="off" type="text " onfocus="this.placeholder='' " onblur="this.placeholder='Enter your names' " placeholder="Enter your names ">
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="form-group ">
                                    <input class="form-control valid " name="mail" id="email" autocomplete="off" type="email " onfocus="this.placeholder='' " onblur="this.placeholder='Enter email address' " placeholder="Email ">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-group ">
                                    <input class="form-control " name="password" id="password" autocomplete="off" type="password" onfocus="this.placeholder='' " onblur="this.placeholder='Enter Password' " placeholder="Password ">
                                </div>
                            </div>
                             <div class="col-12 ">
                                <div class="form-group ">
                                    <input class="form-control " name="confirm" id="confirmpass" autocomplete="off" type="password" onfocus="this.placeholder='' " onblur="this.placeholder='Confirm Password' " placeholder="Confirm Password ">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3 ">
                            <button name="action" value="create" id="btn-create" class="button button-contactForm boxed-btn ">Create Acount</button>
                        </div>
                    </div>
                    <span class="small message-success text-success">Acount has been created successfully.</span>
                    <span class="small message-danger text-danger"></span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ================ contact section end ================= -->

    <!-- Request Back Start -->
    <div class="request-back-area section-padding30 ">
        <div class="container ">
            <div class="row d-flex justify-content-between ">
                <div class="col-xl-4 col-lg-5 col-md-5 ">
                    <div class="request-content ">
                        <h3>Request for Call Back</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 ">
                    <!-- Contact form Start -->
                    <div class="form-wrapper ">
                        <form id="contact-form " action="# " method="POST ">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form-box mb-30 ">
                                        <input type="text " name="name " placeholder="Name ">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form-box mb-30 ">
                                        <input type="text " name="email " placeholder="Phone ">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 mb-30 ">
                                    <div class="select-itms ">
                                        <select name="select " id="select1 ">
                                            <option value=" ">Services</option>
                                            <option value=" ">Services-1</option>
                                            <option value=" ">Services-2</option>
                                            <option value=" ">Services-3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 ">
                                    <button type="submit " class="send-btn ">Send</button>
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
    <?php include('footer.php') ?>
</body>

</html>