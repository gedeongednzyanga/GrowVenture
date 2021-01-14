<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GrowVenture | Login</title>
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
        <?php include('header_area.php'); ?>
        <!-- Header End -->
    </header>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center "
            data-background="views/assets/img/hero/contact_hero.jpg ">
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
                    <h2 class="contact-title ">Login Here</h2>
                </div>
                <div class="col-lg-8 ">
                    <form class="form-contact contact_form " action="contact_process.php " method="post "
                        id="contactForm " novalidate="novalidate ">
                        <div class="row ">
                            <div class="col-sm-12 ">
                                <div class="form-group ">
                                    <input class="form-control valid " name="name " id="name " type="text "
                                        onfocus="this.placeholder='' " onblur="this.placeholder='Enter your name' "
                                        placeholder="Enter your name ">
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="form-group ">
                                    <input class="form-control valid " name="email " id="email " type="email "
                                        onfocus="this.placeholder='' " onblur="this.placeholder='Enter email address' "
                                        placeholder="Email ">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-group ">
                                    <input class="form-control " name="subject " id="subject " autocomplete="off"
                                        type="password" onfocus="this.placeholder='' "
                                        onblur="this.placeholder='Enter Subject' " placeholder="Password ">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3 ">
                            <button type="submit " class="button button-contactForm boxed-btn ">Connexion</button>
                        </div>
                    </form>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore,</p>
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