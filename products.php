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
    <section class="hero is-fullheight hero-prod">
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
                <div class="column is-8 is-offset-2">
                    <h1 class="title">OUR PRODUCTS</h1>
                    <p class="subtitle">We offer a wide variety of products! <br> Everything from trims, tools, to metal
                        framing. <br>See below for more details</p>
                </div>
            </div>
        </div>
    </section>


    <!-- PRODUCTS SECTION -->
    <section class="section is-medium bg-grey">
        <h1 class="bold-title has-text-centered">Product Breakdown</h1>
        <div class="container">
            <div class="tabs is-centered">
                <ul>
                    <li class="tab is-active" onclick="openTab(event, 'gypsum')"><a>Gypsum Wallboard Products</a></li>
                    <li class="tab" onclick="openTab(event, 'trims')"><a>Trims</a></li>
                    <li class="tab" onclick="openTab(event, 'tools')"><a>Tools</a></li>
                    <li class="tab" onclick="openTab(event, 'fasteners')"><a>Construction Fasteners</a></li>
                    <li class="tab" onclick="openTab(event, 'mud')"><a>Mud / Plaster Products</a></li>
                    <li class="tab" onclick="openTab(event, 'fire')"><a>Fire Protection Systems</a></li>
                    <li class="tab" onclick="openTab(event, 'metal')"><a>Metal Framing</a></li>
                </ul>
            </div>
            <div class="box content-tab" id="gypsum">
                <h1 class="title is-4 mb-2">Gypsum Wallboard Products</h1>
                <div class="columns">
                    <div class="column is-4">
                        <li>Regular Gypsum Board</li>
                        <li>Gypsum Sheathing</li>
                        <li>Hi-Abuse, Hi-Flex, Hi-Strength</li>
                    </div>
                    <div class="column is-4">
                        <li>Fire-rated Wallboard</li>
                        <li>Moisture-resistant Wallboard</li>
                        <li>Shaftwall Liner Panels</li>
                    </div>
                    <div class="column is-4">
                        <li>Vinyl-covered Durasan Wallboard </li>
                        <li>Fiberglass-covered Exterior Drywall</li>
                        <li>Concrete backer Board</li>
                    </div>
                </div>
            </div>
            <div class="box content-tab" id="trims" style="display:none">
                <h1 class="title is-4 mb-2">Trims</h1>
                <div class="columns">
                    <div class="column is-4">
                        <li>Drywall J-bead & L-bead</li>
                        <li>Vinyl & Metal Cornerbead</li>
                    </div>
                    <div class="column is-4">
                        <li>Expansion Joints</li>
                        <li>Archway Cornerbead</li>
                    </div>
                    <div class="column is-4">
                        <li>Bullnose Cornerbead</li>
                    </div>
                </div>
            </div>
            <div class="box content-tab" id="tools" style="display:none">
                <h1 class="title is-4 mb-2">Tools</h1>
                <div class="columns">
                    <div class="column is-4">
                        <li>Drywall Finishing Tools</li>
                        <li>Power Tools</li>
                        <li>Stilts</li>
                    </div>
                    <div class="column is-4">
                        <li>Aluminum Benches</li>
                        <li>Drills and Screw Guns</li>
                        <li>Leather Tool Pouches</li>
                    </div>
                    <div class="column is-4">
                        <li>Texture Sprayers</li>
                        <li>Power Sanders / Vacuums</li>
                    </div>
                </div>
            </div>
            <div class="box content-tab" id="fasteners" style="display:none">
                <h1 class="title is-4 mb-2">Construction Fasteners</h1>
                <div class="columns">
                    <div class="column is-4">
                        <li>Wood & Metal Screws</li>
                        <li>Grip-Tite Nails</li>
                    </div>
                    <div class="column is-4">
                        <li>Low Velocity Pins and Loads</li>
                        <li>Hanger & Tie Wire</li>
                    </div>
                    <div class="column is-4">
                        <li>Staplers & Staples</li>
                    </div>
                </div>
            </div>
            <div class="box content-tab" id="mud" style="display:none">
                <h1 class="title is-4 mb-2">Mud / Plaster Products</h1>
                <div class="columns">
                    <div class="column is-4">
                        <li>Ready Mix Joint Compound</li>
                        <li>Setting Compounds</li>
                    </div>
                    <div class="column is-4">
                        <li>Ceiling and Wall Texture</li>
                    </div>
                    <div class="column is-4">
                        <li>Portland Cement </li>
                    </div>
                </div>
            </div>
            <div class="box content-tab" id="fire" style="display:none">
                <h1 class="title is-4 mb-2">Fire Protection Systems</h1>
                <div class="columns">
                    <div class="column is-4">
                        <li>Firestop Caulk</li>
                        <li>Firestop Spray</li>
                    </div>
                    <div class="column is-4">
                        <li>Firestop Compound</li>
                    </div>
                    <div class="column is-4">
                        <li>Fire Tape</li>
                    </div>
                </div>
            </div>
            <div class="box content-tab" id="metal" style="display:none">
                <h1 class="title is-4 mb-2">Metal Framing</h1>
                <div class="columns">
                    <div class="column is-4">
                        <li>Metal Studs</li>
                    </div>
                    <div class="column is-4">
                        <li>Track</li>
                    </div>
                    <div class="column is-4"></div>
                </div>
            </div>
        </div>

        <!-- PRODUCTS CAROUSEL -->
        <div class="container carousel-container">
            <!-- Start Carousel -->
            <div id="prod-carousel" class="prod-carousel">
                <div class="car-item">
                    <!-- Slide Content -->
                    <figure class="image">
                        <img src="/images/company/Products-1.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="car-item">
                    <!-- Slide Content -->
                    <figure class="image">
                        <img src="/images/company/Metal-2.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="car-item">
                    <!-- Slide Content -->
                    <figure class="image">
                        <img src="/images/company/Products-2.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="car-item">
                    <!-- Slide Content -->
                    <figure class="image">
                        <img src="/images/company/Metal-1.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="car-item">
                    <!-- Slide Content -->
                    <figure class="image">
                        <img src="/images/company/Products-5.jpg" alt="Placeholder image">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <!-- BRANDS CAROUSEL -->
    <section class="section is-medium">
        <div class="container carousel-container">
            <h1 class="bold-title has-text-centered">Fantastic Brands We Work With</h1>
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
                <form action="contact-submit.php" method="post">
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

        // Products Carousel
        const prodCarousels = bulmaCarousel.attach('.prod-carousel', {
            autoplay: true,
            duration: 1500,
            loop: true,
            navigation: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            breakpoints: [{ changePoint: 500, slidesToShow: 1, slidesToScroll: 1 }, { changePoint: 768, slidesToShow: 3, slidesToScroll: 3 }]
        });

        // Brands Carousel
        const brandCarousels = bulmaCarousel.attach('.brand-carousel', {
            autoplay: true,
            duration: 900,
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