<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- bootstrap -->
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">

    <link rel="stylesheet" href="./css/tours.css">
    <title>🌳Tours</title>
</head>

<body>
    <!-- header -->
    <header class="header">
        <a href="#" class="logo">Tours.</a>
        <div class="social-media">
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-telegram'></i></a>
            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
        </div>
        <nav class="navbar">
            <a href="#destinations">Destinations</a>
            <a href="./booking.html">Booking</a>
            <a href="#">Services</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- banner -->
    <section class="banner">
        <div class="slider">
            <div class="slide">
                <img
                    src="https://images.unsplash.com/photo-1522383225653-ed111181a951?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="left-info">
                    <div class="penetrate-blur">
                        <h1>JAP</h1>
                    </div>
                    <div class="content">
                        <h3>01. Japan Tour</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut enim molestiae aut, at rerum
                            consequuntur veritatis quisquam! Consectetur, omnis, maxime libero corrupti dicta pariatur
                            ad in atque expedita ex dolores.
                        </p>
                        <a href="#page-1st" class="btn">More Details</a>
                    </div>
                </div>
                <div class="right-info">
                    <h1>AN</h1>
                    <h3>City</h3>
                </div>
            </div>
        </div>
        <div class="navigation">
            <span class="prev-btn">
                <i class='bx bx-chevron-left'></i>
            </span>
            <span class="next-btn">
                <i class='bx bx-chevron-right'></i>
            </span>
        </div>
    </section>

    <!-- hashtags -->
    <section class="hashtags">
        <a href="#">Seoul</a>
        <a href="#">Taiwan</a>
        <a href="#">Luxury Cruise</a>
        <a href="#">Japan</a>
        <a href="#">China</a>
        <a href="#">Australia</a>
        <a href="#">Canada</a>
        <a href="#">Southeast Asia</a>
    </section>

    <!-- booking -->
    <section class="booking-bar" id="booking-bar">
        <div class="title">
            <h2>Booking</h2>
        </div>
        <div class="main">
            <form class="bookingBar">
                <div>
                    <label for="dest">Destination</label>
                    <input type="text" id="dest" placeholder="Taiwan, Australia, SEA">
                </div>
                <div>
                    <label for="keywords">Keywords</label>
                    <input type="text" id="keywords" placeholder="Luxury Cruise, Beach">
                </div>
                <div class="date-range-picker">
                    <div class="left">
                        <label for="start-date">Start Date</label>
                        <input type="date" id="start-date">
                    </div>

                    <div class="right">
                        <label for="end-date">End Date</label>
                        <input type="date" id="end-date">
                    </div>
                </div>
                <div class="submit">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
        </div>
        </form>
        </div>
    </section>

    <!-- category -->
    <section class="category">
        <div class="title">
            <h2>Category</h2>
            <div class="category-btn">
                <div class="btn prev-btn">
                    <i class="fa-solid fa-caret-left"></i>
                </div>
                <div class="btn next-btn">
                    <i class="fa-solid fa-caret-right"></i>
                </div>
            </div>
        </div>

        <div class="main">
            <a href="#">
                <div class="card">
                    <div class="info">
                        <h3>Sunshine & Beach</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, aperiam!
                        </p>
                    </div>
                    <img src="./images/area_beach.jpg">
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <div class="info">
                        <h3>Sunshine & Beach</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, aperiam!
                        </p>
                    </div>
                    <img src="./images/area_amusementPark.jpg">
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <div class="info">
                        <h3>Sunshine & Beach</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, aperiam!
                        </p>
                    </div>
                    <img src="./images/area_city.jpg">
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <div class="info">
                        <h3>Sunshine & Beach</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, aperiam!
                        </p>
                    </div>
                    <img src="./images/area_culture.jpg">
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <div class="info">
                        <h3>Sunshine & Beach</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, aperiam!
                        </p>
                    </div>
                    <img src="./images/area_mountain.jpg">
                </div>
            </a>
        </div>
    </section>

    <!-- middle banner -->
    <section class="middle-banner">
        <div class="title">
            <h2>Topic</h2>
        </div>
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner" data-bs-interval="200">
                    <div class="carousel-item active">
                        <img src="./images/middle-banner_001.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="./images/middle-banner_002.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="./images/middle-banner_003.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- popular -->
    <section class="popular">
        <div class="title">
            <h2>Popular Place</h2>
        </div>

        <div class="row">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" data-bs-interval="200">
                    <div class="carousel-item active">
                        <div class="content">
                            <div class="card-test">
                                <div class="img"><img src="./images/area_001.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-test">
                                <div class="img"><img src="./images/area_002.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-test">
                                <div class="img"><img src="./images/area_003.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-test">
                                <div class="img"><img src="./images/area_004.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="content">
                            <div class="card-test">
                                <div class="img"><img src="./images/area_005.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-test">
                                <div class="img"><img src="./images/area_006.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-test">
                                <div class="img"><img src="./images/area_007.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-test">
                                <div class="img"><img src="./images/area_008.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="content">
                            <div class="card-test">
                                <div class="img"><img src="./images/area_009.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-test">
                                <div class="img"><img src="./images/area_010.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-test">
                                <div class="img"><img src="./images/area_011.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-test">
                                <div class="img"><img src="./images/area_012.jpg" alt=""></div>
                                <div class="card-info">
                                    <h5>Lorem.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                    <h6 class="location">Taiwan, Taipei</h6>
                                    <div class="go">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- video-banner -->
    <section class="video-banner">
        <div class="title">
            <h2>Discover Italy, Embrace Timeless Romance!</h2>
        </div>
        <div class="main">
            <div class="left">
                <video src="./media/vlog_Italy(2022).mp4" muted autoplay></video>
            </div>
            <div class="right">
                <a href="#">
                    <p class="location-tag">Fountain of Love</p>
                    <p class="content">Experience the magic of love, journey with beauty.</p>
                    <p class="price">$ <span class="highlight">31,000</span> up</p>
                </a>
                <a href="#">
                    <p class="location-tag">Historical Lean</p>
                    <p class="content">Journey through history, the classic beauty of lean.</p>
                    <p class="price">$ <span class="highlight">31,000</span> up</p>
                </a>
                <a href="#">
                    <p class="location-tag">Fairytale Charm</p>
                    <p class="content">Enchanting charm of a fairytale old town, where elegance meets history.</p>
                    <p class="price">$ <span class="highlight">31,000</span> up</p>
                </a>
                <a href="#">
                    <p class="location-tag">Sunlit Romance</p>
                    <p class="content">Romantic paradise of sun and waves, indulge in Italy's romantic spirit.</p>
                    <p class="price">$ <span class="highlight">31,000</span> up</p>
                </a>
                <a href="#">
                    <p class="location-tag">Iconic Milan Cathedral</p>
                    <p class="content">Revive faith, the marvel of architectural beauty.</p>
                    <p class="price">$ <span class="highlight">31,000</span> up</p>
                </a>
                <a href="#">
                    <p class="location-tag">Romantic City on Water</p>
                    <p class="content">Spiritual haven of the city on water, the epitome of beauty and fantasy.</p>
                    <p class="price">$ <span class="highlight">31,000</span> up</p>
                </a>
            </div>
        </div>
    </section>
    <!-- last-banner -->
    <section class="last-banner">
        <div class="last-banner-content">
            <div class="last-banner-info">
                <h2>Let's Go</h2>
                <a href="#">Enjoy Now</a>
            </div>
            <img src="./images/sunrise (1).jpg">
        </div>
    </section>

    <!-- contact us -->
    <h2 class="last-p" id="contact">Still have a question?</h2>
    <section class="contact-us">
        <div class="contact-us_left">
            <div class="bg-bobbles">
                <div class="bobble-1">
                    <img src="./images/bobble_001.png" alt="">
                </div>
                <div class="bobble-2">
                    <img src="./images/bobble_002.png" alt="">
                </div>
            </div>

            <img src="./images/cutomer-service.png" alt="">
            <div class="contact-us_info">
                <a href="mailto:customerService@email.com" title="Email to us">
                    <i class="fa-solid fa-envelope"></i>
                    customerService@email.com
                </a>
                <a href="tel:+886-912-345-678" title="Call us">
                    <i class="fa-solid fa-phone"></i>
                    +886-912-345-678
                </a>
                <div class="social-media">
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-telegram'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>
        </div>

        <div class="contact-us_right">
            <h1>Contact us</h1>
            <form action="" method="post">
                <label for="name">Your Name</label>
                <input type="text" name="name" id="name">

                <label for="email">Your Email</label>
                <input type="email" name="email" id="email">

                <label for="telephone">Your Phone Number</label>
                <input type="number" name="telephone" id="telephone">

                <label for="address">Your Address</label>
                <input type="text" name="address" id="address">

                <label for="message">Your Message</label>
                <textarea name="message" id="message" rows="2" cols="50"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

    <!-- partnerships -->
    <section class="partnerships">
        <div class="title">
            <h2>Partnerships</h2>
        </div>
        <div class="main">
            <a class="partner-item" href="#" title="Agoda">
                <img src="./images/other_agoda.png">
            </a>
            <a class="partner-item" href="#" title="Airbnb">
                <img src="./images/other_airbnb.png">
            </a>
            <a class="partner-item" href="#" title="Booking.com">
                <img src="./images/other_booking-com.png">
            </a>
            <a class="partner-item" href="#" title="Expedia">
                <img src="./images/other_expedia.png">
            </a>
            <a class="partner-item" href="#" title="Klook">
                <img src="./images/other_klook.png">
            </a>
            <a class="partner-item" href="#" title="Taiwan">
                <img src="./images/other_taiwan.svg">
            </a>
            <a class="partner-item" href="#" title="Trip.com">
                <img src="./images/other_trip-com.png">
            </a>
        </div>
    </section>
    <!-- footer -->
    <footer class="footer"></footer>




    <script src="./js/tours.js"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/a9ac565d46.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>