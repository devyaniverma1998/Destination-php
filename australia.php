<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Australia</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        .banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.4)), url('images/australia/Amazing Australia.png');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .banner-h {
            font-size: 3rem;
            font-weight: bold;
        }

        .banner-text {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .more {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ffc107;
            color: black;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
        }

        .more:hover {
            background-color: #e0a800;
        }

        .carousel-item img {
            object-fit: cover;
            height: auto;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }

        .carousel-item:hover img {
            transform: scale(1.03);
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 8%;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 12px;
            transition: background 0.3s ease;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: rgba(0, 0, 0, 0.6);
        }

        .content-section {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .content-section.active {
            display: block;
            opacity: 1;
        }

        .section-title {
            font-size: 2.25rem;
            font-weight: 800;
            color: #1a202c;
            margin: 13px 0px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -0.5rem;
            left: 0;
            width: 60px;
            height: 4px;
            background: #ffd700;
            border-radius: 2px;
        }

        .content-section p {
            color: #4a5568;
            line-height: 1.8;
            margin-bottom: 2px;
        }

        .content-container {
            background: linear-gradient(145deg, #ffffff, #f7fafc);
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            padding: 18px;
        }

        .guide-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .guide-nav button {
            background: #e2e8f0;
            color: #1a202c;
            padding: 4px 8px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .guide-nav button:hover,
        .guide-nav button.active {
            background: #ffd700;
            color: #1a202c;
        }

        /* Package expiry styles */
        .expiring-soon {
            border: 2px solid #ffc107;
            position: relative;
        }

        .expiring-soon::before {
            content: "Expiring Soon";
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ffc107;
            color: #000;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 12px;
            z-index: 10;
        }

        .expired {
            opacity: 0.7;
            filter: grayscale(50%);
        }

        .expired::before {
            content: "Expired";
            position: absolute;
            top: 10px;
            right: 10px;
            background: #dc3545;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 12px;
            z-index: 10;
        }

        .expiry-alert {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .carousel-item img {
                height: auto;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .content-section p {
                font-size: 1rem;
            }

            .guide-nav button {
                font-size: 10px;
                padding: 4px 8px;
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/zenith_logo1.png" alt="Zenith Holidays Logo" style="height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.zenithholidays.com/flights">Flights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.zenithholidays.com/hotels">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Holidays</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.zenithholidays.com/activities">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://forex.zenithholidays.com/">Forex</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://visa.zenithholidays.com/">Visa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://insurance.zenithholidays.com/">Insurance</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Senior Citizen</a></li>
                            <li><a class="dropdown-item" href="#">Vouchers</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid py-5 banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-white banner-h fw-bold">Australia</h1>
                    <p class="banner-text text-white">
                        Australia, Land Down Under, is where golden beaches meet untamed outback and coral reefs shimmer
                        with life. Imagine sailing past the Sydney Opera House, sipping wine in the Barossa Valley, or
                        watching Uluru glow under a fiery sunset. From Aboriginal Dreamtime stories to the buzz of
                        laneway cafés, every moment hums with adventure and spirit. Australia isn't just a
                        destination—it's a boundless journey where nature, culture, and soul unite.
                    </p>
                    <a href="https://www.zenithholidays.com/holiday/search?searchby=Australia&type=2&category=&month="
                        class="more">
                        BOOK NOW
                    </a>
                </div>
                <div class="col-md-6 mt-5 banner-img">
                    <img src="images/australia/Amazing Australia.png" class="d-block w-100 bn-img"
                        style="border-radius: 20px; border: 1px solid white; height: 300px;" alt="Australia" />
                </div>
            </div>
        </div>
    </div>

    <section id="destination-welcome" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-3xl md:text-4xl font-bold text-gray-800 mb-8" data-aos="fade-up">Australia
                Travel
                Guide</h2>
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                <!-- Carousel -->
                <div class="lg:col-span-2 order-2 lg:order-1" data-aos="fade-right">
                    <div id="imageSlider" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-content="content-australia-welcome">
                                <img src="images/australia/Australia.png" alt="Welcome to Australia"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-content="content-australia-sydney">
                                <img src="images/australia/Sydney – Harbor City Magic.png"
                                    alt="Sydney – Harbor City Magic" class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-content="content-australia-melbourne">
                                <img src="images/australia/Melbourne – Culture & Creativity.png"
                                    alt="Melbourne – Culture & Creativity" class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-content="content-australia-brisbane">
                                <img src="images/australia/Brisbane – Riverside Charm.png"
                                    alt="Brisbane – Riverside Charm" class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-content="content-australia-perth">
                                <img src="images/australia/Perth – Golden Sunsets.png" alt="Perth – Golden Sunsets"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-content="content-australia-adelaide">
                                <img src="images/australia/Adelaide.png" alt="Adelaide – Wine & Festivals"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-content="content-australia-great-barrier-reef">
                                <img src="images/australia/Great Barrier Reef – Living Wonder.png"
                                    alt="Great Barrier Reef – Living Wonder" class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-content="content-australia-uluru">
                                <img src="images/australia/Uluru – Sacred Red Heart.png" alt="Uluru – Sacred Red Heart"
                                    class="d-block w-100">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#imageSlider"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#imageSlider"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="lg:col-span-3 order-1 lg:order-2 content-container" data-aos="fade-left">
                    <div class="guide-nav" data-aos="fade-up" data-aos-delay="100">
                        <button class="active" data-content="content-australia-welcome">Welcome to Australia</button>
                        <button data-content="content-australia-sydney">Sydney </button>
                        <button data-content="content-australia-melbourne">Melbourne </button>
                        <button data-content="content-australia-brisbane">Brisbane </button>
                        <button data-content="content-australia-perth">Perth </button>
                        <button data-content="content-australia-adelaide">Adelaide</button>
                        <button data-content="content-australia-great-barrier-reef">Great Barrier Reef </button>
                        <button data-content="content-australia-uluru">Uluru </button>
                    </div>

                    <div id="content-australia-welcome" class="content-section active">
                        <h2 class="section-title">Welcome to Australia</h2>
                        <p>Australia enchants with iconic landmarks, vibrant cities, and wild natural beauty. From
                            Sydney's harbor
                            glow to outback deserts and pristine shores, it offers adventure and culture. Dive the Great
                            Barrier Reef,
                            uncover Indigenous stories, or dine in bustling urban centers. Surf waves, hike trails, or
                            meet unique
                            wildlife, each moment brimming with thrill.Australia beckons all travelers to dive into its
                            diverse marvels, where
                            every trip unveils a new chapter of this extraordinary continent's soul.</p>
                    </div>

                    <div id="content-australia-sydney" class="content-section">
                        <h2 class="section-title">Sydney – Harbor City Magic</h2>
                        <p>Sydney dazzles with its iconic Opera House and shimmering harbor, where ferries pass under
                            the Harbour
                            Bridge. Bondi Beach lures with golden sands, while laneway bars spark nightlife. Sunset
                            cruises paint the
                            skyline with magic. Coastal walks and rooftop dining merge nature with urban flair. Sydney
                            blends sophistication with natural splendor, captivating visitors
                            with every view. It's a harbor gem where adventure and elegance coexist in perfect harmony.
                        </p>
                    </div>

                    <div id="content-australia-melbourne" class="content-section">
                        <h2 class="section-title">Melbourne – Culture & Creativity</h2>
                        <p>Melbourne pulses with creativity, its laneways adorned with street art and lively cafés.
                            Vibrant markets
                            and diverse festivals fill the air with culture. Ride a vintage tram or taste wines in the
                            Yarra Valley.
                            This city is a living artwork of flavors and innovation.Melbourne offers a rich tapestry of
                            experiences, where art and life intertwine in a
                            dynamic urban dance.</p>
                    </div>

                    <div id="content-australia-brisbane" class="content-section">
                        <h2 class="section-title">Brisbane – Riverside Charm</h2>
                        <p>Brisbane flows with easygoing charm along its river, where South Bank's parks, beaches, and
                            eateries
                            thrive. Fortitude Valley buzzes with nightlife and music at dusk. Kayak the river or ride
                            the Wheel of
                            Brisbane for stunning views. This city mixes relaxation with adventure. Riverside walks and
                            vibrant
                            evenings create a unique blend of peace and excitement. Brisbane captivates with its
                            laid-back spirit and
                            lively pulse, a true riverside treasure.</p>
                    </div>

                    <div id="content-australia-perth" class="content-section">
                        <h2 class="section-title">Perth – Golden Sunsets</h2>
                        <p>Perth glows with golden beaches, turquoise seas, and endless sunshine. Rottnest Island's
                            quokkas and
                            Fremantle's markets add quirky delight. Sunsets over the Indian Ocean are mesmerizing, while
                            Kings Park
                            offers sweeping views. This western haven blends nature with lifestyle. Stroll the coast or
                            spot wildlife
                            under the sun. Perth invites you to bask in its radiant beauty, where every sunset paints a
                            memorable
                            scene of serenity.</p>
                    </div>

                    <div id="content-australia-adelaide" class="content-section">
                        <h2 class="section-title">Adelaide – Wine & Festivals</h2>
                        <p>Adelaide shines with world-class wines, bustling markets, and vibrant festivals. The Barossa
                            Valley
                            nearby tempts with rich vineyard flavors. Wander the Central Market or dance at a starlit
                            event. This city
                            radiates warmth and energy. From gourmet delights to cultural celebrations, Adelaide
                            captures South
                            Australia's essence. Every sip and step feels like a joyous tribute to life. It's a place
                            where tradition
                            and festivity blend seamlessly.</p>
                    </div>

                    <div id="content-australia-great-barrier-reef" class="content-section">
                        <h2 class="section-title">Great Barrier Reef – Living Wonder</h2>
                        <p>Explore the Great Barrier Reef's vibrant corals and teeming marine life, the world's largest
                            reef.
                            Snorkel with turtles, manta rays, and fish in crystal waters. Scenic flights reveal
                            intricate reef
                            patterns, while boats reach secluded islands. This natural marvel feels otherworldly. Each
                            dive offers a
                            glimpse of underwater magic. The Reef beckons adventurers to discover its living beauty, a
                            stunning
                            testament to nature's artistry and diversity.</p>
                    </div>

                    <div id="content-australia-uluru" class="content-section">
                        <h2 class="section-title">Uluru – Sacred Red Heart</h2>
                        <p>Uluru emerges from the desert, a red rock aglow at sunrise and sunset. This sacred site
                            reveals ancient
                            Aboriginal tales through rock art and culture. Walk its base trails, listen to Dreamtime
                            stories, or
                            stargaze in the outback. A spiritual heart of Australia, it exudes timeless allure. The vast
                            silence and
                            starry nights deepen its mystique. Uluru offers a profound journey into the land's soul,
                            sacred and
                            unforgettable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PACKAGES -->
    <section id="destination" class="py-4">
        <div class="container-fluid">
            <h2 class="text-center fw-bold">Australia Travel Packages</h2>

            <!-- Package expiry info alert -->
            <div class="alert alert-info mx-3 mb-4">
                <h5>Package Expiry Notifications</h5>
                <p>We automatically send email reminders for packages expiring in 5-7 days.</p>
                <a href="package_reminder.php" class="btn btn-sm btn-outline-primary">Check All Packages</a>
            </div>

            <!-- Filter Buttons -->
            <div class="filter-bar bg-white shadow-sm rounded-pill p-3 mb-4">
                <div id="myBtnContainer" class="d-flex flex-wrap justify-content-center gap-2">
                    <button class="btn filter-btn active rounded-pill px-3 py-2" onclick="filterSelection('all')">All
                        Packages</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-5n6d')">5
                        Nights</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-6n7d')">6
                        Nights</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-7n8d')">7
                        Nights</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-8n9d')">8
                        Nights</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-9n10d')">9
                        Nights</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-10n11d')">10
                        Nights</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-12n13d')">12
                        Nights</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-13n14d')">13
                        Nights</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-15n16d')">15
                        Nights</button>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-4 g-3 filterable ">
                <?php
                // Australia packages array
                $australiaPackages = [
                    [
                        'id' => 'australia_1',
                        'title' => 'Urban Wonders of Australia',
                        'nights' => '6 Nights/7 Days',
                        'price' => '₹85,990/-',
                        'image' => 'images/australia/Wonders Of Australia & New Zealand.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=68889f98405eb70aa7964a3e&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-6n7d'
                    ],
                    [
                        'id' => 'australia_2',
                        'title' => 'Gold Coast & Sydney Express',
                        'nights' => '7 Nights/8 Days',
                        'price' => '₹109,990/-',
                        'image' => 'images/australia/Gold Coast & Sydney Express.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=6889b609405eb70aa7965c26&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-7n8d'
                    ],
                    [
                        'id' => 'australia_3',
                        'title' => 'East Coast Trio of Australia',
                        'nights' => '8 Nights/9 Days',
                        'price' => '₹124,990/-',
                        'image' => 'images/australia/East Coast Trio of Australia.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=6889e5e2405eb70aa79669e3&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-8n9d'
                    ],
                    [
                        'id' => 'australia_4',
                        'title' => 'Best of Australia',
                        'nights' => '9 Nights/10 Days',
                        'price' => '₹139,990/-',
                        'image' => 'images/australia/Best of Australia.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688a12f9405eb70aa79673cd&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-9n10d'
                    ],
                    [
                        'id' => 'australia_5',
                        'title' => 'Melbourne & Sydney',
                        'nights' => '6 Nights/7 Days',
                        'price' => '₹98,990/-',
                        'image' => 'images/australia/Melbourne & Sydney.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688a3a7e405eb70aa7967c19&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-6n7d'
                    ],
                    [
                        'id' => 'australia_6',
                        'title' => 'Australian Delight - Self Drive',
                        'nights' => '5 Nights/6 Days',
                        'price' => '₹95,990/-',
                        'image' => 'images/australia/Australian Delight - Self Drive.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688a5d6e405eb70aa79685a9&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-5n6d'
                    ],
                    [
                        'id' => 'australia_7',
                        'title' => 'Amazing Queensland',
                        'nights' => '6 Nights/7 Days',
                        'price' => '₹99,990/-',
                        'image' => 'images/australia/Amazing Queensland.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688a804a405eb70aa7968f56&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-6n7d'
                    ],
                    [
                        'id' => 'australia_8',
                        'title' => 'Australia City Breaks',
                        'nights' => '9 Nights/10 Days',
                        'price' => '₹149,990/-',
                        'image' => 'images/australia/Australia city breaks.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688aa7cf405eb70aa796984f&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-9n10d'
                    ],
                    [
                        'id' => 'australia_9',
                        'title' => 'Amazing Australia',
                        'nights' => '9 Nights/10 Days',
                        'price' => '₹135,990/-',
                        'image' => 'images/australia/Amazing Australia.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688acd8c405eb70aa796a215&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-9n10d'
                    ],
                    [
                        'id' => 'australia_10',
                        'title' => 'Australia',
                        'nights' => '8 Nights/9 Days',
                        'price' => '₹128,990/-',
                        'image' => 'images/australia/Australia.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688af1e7405eb70aa796aa65&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-8n9d'
                    ],
                    [
                        'id' => 'australia_11',
                        'title' => 'Discover Australia - Self Drive',
                        'nights' => '6 Nights/7 Days',
                        'price' => '₹105,990/-',
                        'image' => 'images/australia/Discover Australia - Self Drive.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688b13d9405eb70aa796b1ff&currency=INR',
                        'expiry' => '2025-09-26 23:59:59',
                        'category' => 'pkg-6n7d'
                    ],
                    [
                        'id' => 'australia_12',
                        'title' => 'Australia With Hamilton Island',
                        'nights' => '9 Nights/10 Days',
                        'price' => '₹159,990/-',
                        'image' => 'images/australia/Australia & Hamilton Island.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688b38b4405eb70aa796bbf7&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-9n10d'
                    ],
                    [
                        'id' => 'australia_13',
                        'title' => 'Australia & Fiji Island',
                        'nights' => '10 Nights/11 Days',
                        'price' => '₹185,990/-',
                        'image' => 'images/australia/Australia & Fiji Island.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688b63f1405eb70aa796c87a&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-10n11d'
                    ],
                    [
                        'id' => 'australia_14',
                        'title' => 'Grand Tour of Australia',
                        'nights' => '12 Nights/13 Days',
                        'price' => '₹199,990/-',
                        'image' => 'images/australia/Grand Tour of Australia.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688b8fe2405eb70aa796d5b0&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-12n13d'
                    ],
                    [
                        'id' => 'australia_15',
                        'title' => 'Glimpse Of Australia & New Zealand',
                        'nights' => '10 Nights/11 Days',
                        'price' => '₹189,990/-',
                        'image' => 'images/australia/Glimpse Of Australia & New Zealand.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688bb7a7405eb70aa796e23b&currency=INR',
                        'expiry' => '2025-09-26 23:59:59',
                        'category' => 'pkg-10n11d'
                    ],
                    [
                        'id' => 'australia_16',
                        'title' => 'Amazing Australia with Fiji Island',
                        'nights' => '13 Nights/14 Days',
                        'price' => '₹209,990/-',
                        'image' => 'images/australia/Amazing Australia with Fiji Island.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688bde52405eb70aa796eec7&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-13n14d'
                    ],
                    [
                        'id' => 'australia_17',
                        'title' => 'Best of Australia & New Zealand',
                        'nights' => '15 Nights/16 Days',
                        'price' => '₹229,990/-',
                        'image' => 'images/australia/Best of Australia & New Zealand.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688c06d7405eb70aa796fa56&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-15n16d'
                    ],
                    [
                        'id' => 'australia_18',
                        'title' => 'Wonders Of Australia & New Zealand',
                        'nights' => '15 Nights/16 Days',
                        'price' => '₹235,990/-',
                        'image' => 'images/australia/Wonders Of Australia & New Zealand.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688c2c26405eb70aa79706a2&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-15n16d'
                    ],
                    [
                        'id' => 'australia_19',
                        'title' => 'Gems Of Australia & New Zealand',
                        'nights' => '13 Nights/14 Days',
                        'price' => '₹215,990/-',
                        'image' => 'images/australia/Gems Of Australia & New Zealand.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688c5365405eb70aa7971095&currency=INR',
                        'expiry' => '2025-10-21 23:59:59',
                        'category' => 'pkg-13n14d'
                    ],
                    [
                        'id' => 'australia_20',
                        'title' => 'Australia Self-Drive Experience',
                        'nights' => '13 Nights/14 Days',
                        'price' => '₹205,990/-',
                        'image' => 'images/australia/Australia Self-Drive Experience.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688c7b42405eb70aa7971b77&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-13n14d'
                    ],
                    [
                        'id' => 'australia_21',
                        'title' => 'Australia Luxury Redefined',
                        'nights' => '6 Nights/7 Days',
                        'price' => '₹155,990/-',
                        'image' => 'images/australia/Australia Luxury Redefined.png',
                        'url' => 'https://www.zenithholidays.com/holiday/details?id=688ca2ad405eb70aa79725da&currency=INR',
                        'expiry' => '2025-10-26 23:59:59',
                        'category' => 'pkg-6n7d'
                    ]
                ];

                // Display packages with expiry information
                if (!empty($australiaPackages)) {
                    foreach ($australiaPackages as $index => $pkg) {
                        $today = new DateTime();

                        // Check if expiry date exists and is valid
                        if (isset($pkg['expiry'])) {
                            try {
                                $expiry = new DateTime($pkg['expiry']);
                                $daysLeft = (int) $today->diff($expiry)->format("%r%a");
                            } catch (Exception $e) {
                                $daysLeft = 999; // Invalid date, treat as not expiring
                                $expiry = new DateTime('+30 days'); // Default future date
                            }
                        } else {
                            $daysLeft = 999; // No expiry date, treat as not expiring
                            $expiry = new DateTime('+30 days'); // Default future date
                        }

                        $cardClass = "";
                        $expiryAlert = "";

                        if ($daysLeft < 999) {
                            if ($today > $expiry) {
                                $cardClass = "expired";
                                $expiryAlert = '<div class="expiry-alert alert alert-danger py-1 mb-2"><small>Expired on: ' . $expiry->format('d M Y') . '</small></div>';
                            } elseif ($daysLeft <= 7) {
                                $cardClass = "expiring-soon";
                                $expiryAlert = '<div class="expiry-alert alert alert-warning py-1 mb-2"><small>Expires in: ' . $daysLeft . ' days (' . $expiry->format('d M Y') . ')</small></div>';
                            }
                        }

                        echo '
                    <div class="col filterDiv all ' . $pkg['category'] . ' ' . $cardClass . '">
                        <div class="card shadow-sm border-0 h-100">
                            <a href="' . $pkg['url'] . '"><img src="' . $pkg['image'] . '" class="card-img-top" alt="' . $pkg['title'] . '" style="height: auto; object-fit: cover;"></a>
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">' . $pkg['title'] . '</h5>
                                <p class="card-text text-muted mb-1">' . $pkg['nights'] . '</p>
                                ' . $expiryAlert . '
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">' . $pkg['price'] . '</span></div>
                                    <a href="' . $pkg['url'] . '" class="btn btn-warning rounded-pill px-4">View</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                } else {
                    echo '<div class="col-12"><div class="alert alert-warning">No Australia packages found in the system.</div></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <script>
        // Filter function for packages
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");

            if (c == "all") c = "";

            // Add the "show" class to filtered elements, and remove the "show" class from elements that are not selected
            for (i = 0; i < x.length; i++) {
                if (x[i].className.indexOf(c) > -1) {
                    x[i].style.display = "block";
                } else {
                    x[i].style.display = "none";
                }
            }

            // Update active class on buttons
            var btns = document.getElementsByClassName("filter-btn");
            for (i = 0; i < btns.length; i++) {
                btns[i].classList.remove("active");
            }

            // Add active class to the current button
            event.currentTarget.classList.add("active");
        }

        // Initialize with all packages shown
        // document.addEventListener('DOMContentLoaded', function () {
        //     filterSelection('all');

        //     // Automatically apply 15 Nights filter on page load
        //     setTimeout(function () {
        //         filterSelection('pkg-all');

        //         // Button को active state में update करें
        //         var buttons = document.querySelectorAll('.filter-btn');
        //         buttons.forEach(function (btn) {
        //             btn.classList.remove('all');
        //             if (btn.textContent.trim() === 'all') {
        //                 btn.classList.add('all');
        //             }
        //         });
        //     }, 100);
        // });
    </script>

    <style>
        .filter-btn.active {
            background-color: #ffc107;
            color: #000;
            border-color: #ffc107;
        }

        .filterDiv {
            display: none;
        }
    </style>
    <footer class="footer bg-dark text-white py-3">
        <div class="container text-center">
            <span>Copyright © 2025 Zenithholidays.com All Rights Reserved</span>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 10000,
            once: true
        });

        // Synchronize carousel with content
        $('#imageSlider').on('slid.bs.carousel', function () {
            const contentId = $('.carousel-item.active').data('content');
            $('.content-section').removeClass('active').css('display', 'none');
            $(`#${contentId}`).addClass('active').css('display', 'block');
            $('.guide-nav button').removeClass('active');
            $(`.guide-nav button[data-content="${contentId}"]`).addClass('active');
        });

        // Navigation buttons
        $('.guide-nav button').on('click', function () {
            const contentId = $(this).data('content');
            $('#imageSlider').carousel($(`.carousel-item[data-content="${contentId}"]`).index());
        });

        // Filter packages
        function filterSelection(category) {
            $('.filterDiv').each(function () {
                $(this).removeClass('d-none');
                if (category === 'all' || $(this).hasClass(category)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
            $('.filter-btn').removeClass('active');
            $(`button[onclick="filterSelection('${category}')"]`).addClass('active');
        }

        // Initialize first filter
        filterSelection('all');

        // Automatic scroll every 30 seconds
        setInterval(function () {
            $('#imageSlider').carousel('next');
        }, 3000);
    </script>
</body>

</html>