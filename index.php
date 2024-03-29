<?php 
    // Load Composer's autoloader
    require 'vendor/autoload.php';
    //Load .env file
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inland Empire Drywall</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6621c73f86.js" crossorigin="anonymous"></script>

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />

    <!-- Bulma Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <!-- HERO SECTION -->
    <section class="hero is-fullheight hero-home">
        <div class="hero-head">

            <!-- Start of navbar -->
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item nav-a" href="/">Inland Empire</a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <span class="navbar-item">
                                <a class="is-white is-outlined nav-a" href="index.php">
                                    <span>HOME</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="is-white is-outlined nav-a" href="products.php">
                                    <span>PRODUCTS</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="is-white is-outlined nav-a" href="about.php">
                                    <span>ABOUT</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="is-white is-outlined nav-a" href="#contact">
                                    <span>CONTACT</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End navbar -->
        </div>

        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column has-text-center title-pad">
                        <h1 class="title">INLAND EMPIRE DRYWALL</h1>
                    </div>
                </div>
                <div class="columns container-pad">
                    <div class="column is-4">
                        <div class="box hero-box">
                            <div class="container hero-container">
                                <span class="icon">
                                    <i class="fa-solid fa-warehouse fa-2xl" style="color: #f1ae4a;"></i>
                                </span>
                                <h1 class="subtitle hero-sub">Quality Materials</h1>
                                <a href="#products"><button
                                        class="button is-responsive yellow-outline">Products</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="box hero-box">
                            <div class="container hero-container">
                                <span class="icon">
                                    <i class="fa-solid fa-truck fa-2xl" style="color: #f1ae4a;"></i>
                                </span>
                                <div class="subtitle hero-sub">Superior Service</div>
                                <a href="#services"><button
                                        class="button is-responsive yellow-outline">Services</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="box hero-box">
                            <div class="container hero-container">
                                <span class="icon">
                                    <i class="fa-solid fa-users fa-2xl" style="color: #f1ae4a;"></i>
                                </span>
                                <h1 class="subtitle hero-sub">Amazing Team</h1>
                                <a href="#about"><button class="button is-responsive yellow-outline">About
                                        Us</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUALITY MATERIALS SECTION -->
    <section id="products" class="section is-medium bg-grey">

        <!-- ROW 1 -->
        <div class="columns">
            <div class="column">
                <h1 class="bold-title has-text-centered">Quality Materials <br> At a Competitive Price</h1>
            </div>
        </div>

        <!-- ROW 2 -->
        <div class="columns">
            <div class="column is-4">
                <div class="card material-card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/images/company/Project-3.jpg">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card material-card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/images/company/Project-2.jpg">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card material-card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/images/company/Project-6.jpg">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div id="btn-desktop" class="columns btn-column">
            <div class="column is-2 is-offset-5">
                <a href="products.php"><button
                        class="button is-rounded is-medium is-fullwidth is-responsive blue-btn">View
                        Products</button></a>
            </div>
        </div>
        <div id="btn-tablet" class="columns btn-column">
            <div class="column ">
                <a href="products.php"><button
                        class="button is-rounded is-medium is-fullwidth is-responsive blue-btn">View
                        Products</button></a>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section id="services" class="section services-parallax">
        <div id="services-desktop" class="container">
            <div class="columns is-0">
                <div class="column is-4 is-offset-2">
                    <div class="card services-card">
                        <div class="card-content">
                            <div class="content">
                                <h1 class="has-text-white has-text-centered">- Will Call -</h1>
                                <p class="has-text-white">Customers may also call orders in ahead of time for pickup at
                                    a local
                                    yard, and we’ll have it ready to go when you arrive. It’s just another way we go the
                                    extra
                                    mile to provide exceptional customer service.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card services-card">
                        <div class="card-content">
                            <div class="content">
                                <h1 class="has-text-white has-text-centered">- Delivery -</h1>
                                <p class="has-text-white"> We are dedicated to providing efficient, accurate, and timely
                                    home
                                    deliveries as part of our commitment to excellent customer service. We also make
                                    every
                                    effort to protect your materials along the way.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="services-mobile" class="container">
            <div class="columns is-0">
                <div class="column is-6">
                    <div class="card services-card">
                        <div class="card-content">
                            <div class="content">
                                <h1 class="has-text-white has-text-centered">- Will Call -</h1>
                                <p class="has-text-white">Customers may also call orders in ahead of time for pickup at
                                    a local
                                    yard, and we’ll have it ready to go when you arrive. It’s just another way we go the
                                    extra
                                    mile to provide exceptional customer service.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="card services-card">
                        <div class="card-content">
                            <div class="content">
                                <h1 class="has-text-white has-text-centered">- Delivery -</h1>
                                <p class="has-text-white"> We are dedicated to providing efficient, accurate, and timely
                                    home
                                    deliveries as part of our commitment to excellent customer service. We also make
                                    every
                                    effort to protect your materials along the way.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
    <section id="about" class="section is-medium">
        <h1 class="has-text-centered about-title">Who Are We?</h1>

        <div class="container">
            <p class="has-text-centered about-text">
                <em>Inland Empire Drywall Supply is a building supplier that specializes in building products for the
                    residential and commercial drywall contractor. Our Mission is to provide superior service to the
                    drywall construction professional, while supplying materials at a competitive price.</em>
            </p>
        </div>

        <div id="btn-desktop" class="columns btn-column">
            <div class="column is-2 is-offset-5">
                <a href="about.php"><button class="button is-rounded is-medium is-fullwidth is-responsive blue-btn">See
                        the Team</button></a>
            </div>
        </div>
        <div id="btn-tablet" class="columns btn-column">
            <div class="column ">
                <a href="about.php"><button class="button is-rounded is-medium is-fullwidth is-responsive blue-btn">See
                        The Team</button></a>
            </div>
        </div>
    </section>

    <!-- CLIENTS REVIEW SECTION -->
    <section id="clients" class="section is-medium bg-grey">
        <!-- ROW 1 -->
        <div class="container">
            <h1 class="bold-title has-text-centered">What Our Clients Say</h1>
            <div class="columns">
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="/images/blank-profile.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">MATTHEW SCALISE</p>
                                    <p class="subtitle is-6">
                                    <div class="columns stars">
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <div class="content">
                                "This is my favorite place to purchase anything an everything drywall. Super friendly
                                staff an has helped me an my business for years."
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="/images/blank-profile.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">TOM MITCHELL</p>
                                    <p class="subtitle is-6">
                                    <div class="columns stars">
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <div class="content">
                                "My preferred Drywall Supply Company by far. They do their best to accommodate their
                                customers and they are always friendly."
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="/images/blank-profile.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">HANNAH WORKMAN</p>
                                    <p class="subtitle is-6">
                                    <div class="columns stars">
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                        <div class="column is-1"><i class="fa-solid fa-star fa-lg"
                                                style="color: #232b38;"></i></div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <div class="content">
                                "Amazing first impression! They made buying drywall the quickest and easiest experience.
                                Super great customer service too!"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BRANDS CAROUSEL -->
    <section class="section is-medium">
        <div class="container carousel-container">
            <h1 class="bold-title has-text-centered">Fantastic Brands <br>We Work With</h1>
            <!-- Start Carousel -->
            <div id="brand-carousel" class="brand-carousel">
                <div class="item-1">
                    <!-- Slide Content -->
                    <figure class="image is-4by3">
                        <img src="/images/logos/American-Gypsum.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="item-2">
                    <!-- Slide Content -->
                    <figure class="image is-4by3">
                        <img src="/images/logos/Beadex.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="item-3">
                    <!-- Slide Content -->
                    <figure class="image is-4by3">
                        <img src="/images/logos/Georia-Pacific.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="item-4">
                    <!-- Slide Content -->
                    <figure class="image is-4by3">
                        <img src="/images/logos/Grabber.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="item-5">
                    <!-- Slide Content -->
                    <figure class="image is-4by3">
                        <img src="/images/logos/Hamilton.png" alt="Placeholder image">
                    </figure>
                </div>
                <div class="item-6">
                    <!-- Slide Content -->
                    <figure class="image is-4by3">
                        <img src="/images/logos/Johns-Manville.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="item-7">
                    <!-- Slide Content -->
                    <figure class="image is-4by3">
                        <img src="/images/logos/Owens-Corning.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="item-8">
                    <!-- Slide Content -->
                    <figure class="image is-4by3">
                        <img src="/images/logos/Scorpion.png" alt="Placeholder image">
                    </figure>
                </div>
                <div class="item-9">
                    <!-- Slide Content -->
                    <figure class="image is-4by3">
                        <img src="/images/logos/Trim-Tex.png" alt="Placeholder image">
                    </figure>
                </div>
            </div>
            <!-- End Carousel -->
        </div>
    </section>

    <!-- LOCATION SECTION -->
    <section class="section is-medium location-parallax">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <h1 class="bold-title-lt has-text-centered">LOCATION: SPOKANE VALLEY</h1>
                    <h2 class="location-text has-text-centered"><em>5105 E Railroad Ave, Spokane Valley, WA 99212</em>
                    </h2>
                    <h2 class="location-text has-text-centered">Phone: 509-534-0833 || Fax: 509-534-2402</h2>
                    <a href="https://goo.gl/maps/upZKmsXQmk8LFkMa9" target="_blank">
                        <figure class="image is-5by3 location">
                            <img src="/images/map-small.jpg">
                        </figure>
                    </a>
                </div>
                <div class="column is-6">
                    <h1 class="bold-title-lt has-text-centered">LOCATION: TRI-CITIES</h1>
                    <h2 class="location-text has-text-centered"><em>1630 East 7th Avenue, Kennewick, WA 99337</em></h2>
                    <h2 class="location-text has-text-centered">Phone: 509-586-0330 || Fax: 509-586-0334</h2>
                    <a href="https://goo.gl/maps/nNM6p8jKzMLKicCb6" target="_blank">
                        <figure class="image is-5by3 location">
                            <img src="/images/map-tricities.png">
                        </figure>
                    </a>
                </div>
            </div>

            <!-- Contact Form -->
            <div id="contact" class="contact">
                <h2 class="title is-2 is-capitalized bold-title-lt">Contact Us</h2>
                <form name="contact-us" method="POST" action="contact-submit.php">
                    <div class="field">
                        <label for="name" class="label is-size-4 has-text-weight-light"></label>
                        <div class="control has-icons-left">
                            <input type="text" name="name" id="name" class="input" placeholder="Name" required>
                            <span class="icon is-left">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field">
                        <label for="email" class="label is-size-4 has-text-weight-light"></label>
                        <div class="control has-icons-left">
                            <input type="email" name="email" id="email" class="input" placeholder="Email" required>
                            <span class="icon is-left">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field">
                        <label for="message" class="label is-size-4 has-text-weight-light"></label>
                        <textarea name="message" id="message" rows="5" class="textarea is-medium"
                            placeholder="Message" required></textarea>
                    </div>
                    <div class="column">
                        <div class="g-recaptcha brochure__form__captcha" data-sitekey="<?= $_ENV["SITE_KEY"]?>"></div>
                    </div>
                    <button type="submit" class="button is-medium is-responsive yellow-outline">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer bg-dark">
        <div class="content has-text-centered yellow-font">
            <p class="">© 2023 Inland Empire Drywall. <br> All rights reserved.</p>
        </div>
    </footer>

    <!-- REPCAPTCHA JS -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- BULMA CAROUSEL -->
    <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
    <script>
        const brandCarousels = bulmaCarousel.attach('.brand-carousel', {
            autoplay: true,
            duration: 1500,
            loop: true,
            navigation: false,
            slidesToShow: 5,
            slidesToScroll: 2,
            breakpoints: [{ changePoint: 500, slidesToShow: 1, slidesToScroll: 1 }, { changePoint: 768, slidesToShow: 3, slidesToScroll: 3 }]
        });
    </script>
    <script async type="text/javascript" src="bulma.js"></script>
</body>

</html>