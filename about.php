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
    <section class="hero is-fullheight hero-about">
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
                    <h1 class="title">ABOUT US!</h1>
                    <p class="subtitle">Inland Empire Drywall Supply is a building supplier that specializes in building
                        products for the residential and commercial drywall contractor. Our Mission is to provide
                        superior service to the drywall construction professional, while supplying materials at a
                        competitive price.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR TEAM SECTION -->
    <section class="section is-medium bg-grey">
        <div class="container">
            <h1 class="bold-title has-text-centered">OUR TEAM</h1>

            <!-- ROW 1 -->
            <div class="columns">
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-square">
                                <img src="/images/profiles/Jeff-Profile.jpg" alt="Jeff profile image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Jeff Branson</p>
                                    <p class="subtitle is-6">President</p>
                                    <p class="subtitle is-6"><em>Job Description:</em> Jeff works with customers,
                                        employees and vendors to ensure everyone experiences success. He provides a safe
                                        and healthy workplace for everyone.</p>
                                    <p class="subtitle is-6"><em>Hobies & Interests:</em> Jeff enjoys coaching and
                                        watching youth sports. He has three children that are heavily involved in
                                        basketball, dance, football, lacrosse, soccer, and volleyball. Jeff likes to
                                        hike, snowboard, fish, exercise and spend time with his family.</p>
                                    <p class="subtitle is-6"><em>Favorite Quote:</em> “God, grant me the serenity to
                                        accept the things I cannot change, courage to change the things I can, and the
                                        wisdom to know the difference.” - Reinhold Niebuhr</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-square">
                                <img src="/images/profiles/Rick-Profile.jpg" alt="Rick profile image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Rick Eldenburg</p>
                                    <p class="subtitle is-6">Commercial Sales</p>
                                    <p class="subtitle is-6"><em>Job Description:</em> Rick helps customers be
                                        successful through service and expertise. </p>
                                    <p class="subtitle is-6"><em>Hobies & Interests:</em> Rick enjoys his family, golf,
                                        and sports.</p>
                                    <p class="subtitle is-6"><em>Favorite Quote:</em> "It's all good"</p>
                                    <p class="rick-spacer"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-square">
                                <img src="/images/profiles/Mark-Profile.jpg" alt="Mark profile image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Mark Arnold</p>
                                    <p class="subtitle is-6">-</p>
                                    <p class="subtitle is-6"><em>Job Description:</em> -</p>
                                    <p class="subtitle is-6"><em>Hobies & Interests:</em> Mark loves spending time with
                                        his family! He also enjoys the outdoors whether that be backpacking or just
                                        enjoying time in the garden.</p>
                                    <p class="subtitle is-6"><em>Favorite Quote:</em> “Only YOU Can Prevent Forest
                                        Fire.” - Smokey the Bear</p>
                                    <p class="mark-spacer"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ROW 2 -->
            <div class="columns">
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-square">
                                <img src="/images/profiles/Terri-Profile.jpg" alt="Terri profile image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Terri Miller</p>
                                    <p class="subtitle is-6">Office Assistant</p>
                                    <p class="subtitle is-6"><em>Job Description:</em> Customer billing, inventory,
                                        claims and logistics</p>
                                    <p class="subtitle is-6"><em>Hobies & Interests:</em> Terri is a rodeo mom. She
                                        enjoys traveling and watching her daughter’s horse practices and competitions.
                                    </p>
                                    <p class="subtitle is-6"><em>Favorite Quote:</em> “Never stop being a good person
                                        because of bad people.” - Jay Shetty</p>
                                    <p class="terri-spacer"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-square">
                                <img src="/images/profiles/Kim-Profile.jpg" alt="Kim profile image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Kim Storm</p>
                                    <p class="subtitle is-6">Office Manager & Controller</p>
                                    <p class="subtitle is-6"><em>Job Description:</em> Kim performs daily accounting
                                        tasks.</p>
                                    <p class="subtitle is-6"><em>Hobies & Interests:</em> Kim enjoys crafting, being
                                        outdoors, and spending time with her Granddaughter.</p>
                                    <p class="subtitle is-6"><em>Favorite Quote:</em> "Therefore do not worry about tomorrow, for tomorrow will worry about itself. Each day has enough trouble of its own." - Matthew 6:34
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-square">
                                <img src="/images/profiles/Willie-Profile.jpg" alt="Willie profile image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Willie Miller</p>
                                    <p class="subtitle is-6">Spokane Warehouse Manager</p>
                                    <p class="subtitle is-6"><em>Job Description:</em> Willie maintains warehouse, loads
                                        all deliveries for our drivers and handles will calls for incoming customers.
                                    </p>
                                    <p class="subtitle is-6"><em>Hobies & Interests:</em> Willie enjoys golfing,
                                        bowling, and hunting.</p>
                                    <p class="subtitle is-6"><em>Favorite Quote:</em> “Life is like a box of chocolates.
                                        You never know what you are gonna get.” - Forrest Gump</p>
                                    <p class="willie-spacer"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ROW 3 -->
            <div class="columns">
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-square">
                                <img src="/images/profiles/Clint-Profile.jpg" alt="Clint profile image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Clint Smith</p>
                                    <p class="subtitle is-6">Tri-Cities Branch Manager</p>
                                    <p class="subtitle is-6"><em>Hobies & Interests:</em> -</p>
                                    <p class="subtitle is-6"><em>Favorite Quote:</em> “No dream is too big, no challenge
                                        is too great, nothing we want for our future is beyond our reach” - Donald Trump
                                    </p>
                                    <p class="clint-spacer"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-square">
                                <img src="/images/profiles/jaime-profile.jpeg" alt="Jaime profile image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Jaime Tovar</p>
                                    <p class="subtitle is-6">Tri-Cities Warehouse Manager</p>
                                    <p class="subtitle is-6"><em>Job Description:</em> Jaime maintains warehouse, loads
                                        all deliveries for our drivers and handles will calls for incoming customers.
                                    </p>
                                    <p class="subtitle is-6"><em>Hobies & Interests:</em> -</p>
                                    <p class="subtitle is-6"><em>Favorite Quote:</em> "It is not about being better than
                                        someone else, it is about being better than you were the day before" - Jigoro
                                        Kano</p>
                                    <p class="jaime-spacer"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-square">
                                <img src="/images/profiles/Tasha-Profile.png" alt="Tasha profile image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Tasha Thompson</p>
                                    <p class="subtitle is-6">Tri-Cities Office Assistant</p>
                                    <p class="subtitle is-6"><em>Job Description:</em> Tasha performs daily
                                        administrative office tasks as well as helping customers.</p>
                                    <p class="subtitle is-6"><em>Hobies & Interests:</em> Tasha enjoys paddleboarding,
                                        snowboarding, hiking, wine tasting, and concerts. She also loves to travel.</p>
                                    <p class="subtitle is-6"><em>Favorite Quote:</em> “Life is either a daring adventure
                                        or nothing at all” – Helen Keller</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <script async type="text/javascript" src="bulma.js"></script>
</body>

</html>