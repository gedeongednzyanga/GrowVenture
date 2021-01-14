<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GrowVenture | About</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <?php include('header.php') ;?>
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
        <?php include('header_area.php'); ?>
        <!-- Header End -->
    </header>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center"
                data-background="views/assets/img/hero/contact_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>About GrowVenture</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

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
                            <h2 class="text-info">Overview</h2>
                            <p>
                            <h3>General Services of GrowVenture</h3>
                            <ol>
                                <li> 1. Lend entrepreneurs and other people money to help them to grow their business.
                                </li>
                                <li> 2. Business Planning </li>
                                <li> 3. Financial Projections</li>
                                <li> 4. Strategic Planning</li>
                                <li> 5. Audit & Assurance</li>
                                <li> 6. Digital Solutions</li>
                            </ol>
                            <h3>Objectifs</h3>
                            <p>Help people with strategies, plans, money, ...who don't know how to grow their business.
                            </p>
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row d-flex align-items-end justify-content-center">
                    <div class="col-xl-9 col-lg-9">
                        <div class="trusted-caption">
                            <h2 class="text-info">Characteristics</h2>
                            <p>
                            <h3>What we do</h3>
                            <p id="character">
                                <em>GrowVenture </em>alleviates poverty by helping entrepreneurs build their businesses.
                                <br>
                                <em>GrowVenture</em> alleviates poverty by helping entrepreneurs build their
                                businesses. 
                                By skype, phone, and email, our team mentor entrepreneurs and transfer business skills.
                                This enables the entrepreneurs to run their businesses more effectively, increasing
                                profitability and
                                creating jobs in their communities. <br>
                                Our team is global business professionals with skills in marketing, finance, strategy
                                and
                                business development who offer 12 consultancy sessions for free. 
                            </p>
                            </p>
                            <h3>Why we do it</h3>
                            <p id="character">
                                Micro, small and medium businesses represent the backbone of local economies in many
                                developing countries. These businesses are vehicles for accelerating economic growth,
                                generating employment, foreign exchange and tax revenues. <br>
                                These small enterprises face unique challenges which can limit their full potential.
                                Many businesses work with limited strategy and planning, minimal accounting and
                                financial
                                records, limited customer care, and a short term outlook and vision. By connecting
                                volunteer
                                consultants with entrepreneurs, we can accelerate the economic performance of these
                                businesses.
                                Blending the business expertise of our volunteer consultants with the local knowledge of
                                our
                                entrepreneurs enables these businesses to grow and develop.                    
                            </p>
                            </p>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore,</p>
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
    <?php include("footer.php") ?>

</body>

</html>