<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Andaman</title>

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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.4)), url('images/andaman/Waves & Wonders of Andaman.png');
            background-size: cover;
            background-position: center;
            color: white;
        }

        /* .banner-image{
    border-radius: 20px;
    border: 1px solid white;
    height: 300px !important;
  } */

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
             .filter-btn.active {
            background-color: #ffc107;
            color: #000;
            border-color: #ffc107;
        }

        .filterDiv {
            display: none;
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
            /* margin-bottom: 1.5rem; */
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
                    <h1 class="text-white banner-h fw-bold">Andaman</h1>
                    <p class="banner-text text-white">
                        The Andaman Islands are a pristine paradise of sun-kissed beaches, crystal-clear waters, and
                        lush tropical forests.
                        Imagine walking on white sands, snorkeling among vibrant coral reefs, and witnessing
                        breathtaking sunsets over the horizon—this is the charm of Andaman.
                        From luxury resorts to secluded islands, every moment here is filled with adventure, romance,
                        and tranquility.
                        A true retreat where nature's beauty surrounds you at every step.

                    </p>

                    <a href="https://www.zenithholidays.com/holiday/search?searchby=+Andaman&type=1&category=&month="
                        class="more">
                        BOOK NOW
                    </a>
                </div>
                <div class="col-md-6 mt-5 banner-img">
                    <img src="images/andaman/Waves & Wonders of Andaman.png" class="d-block w-100 bn-img"
                        style="border-radius: 20px; border: 1px solid white; height: 300px;" alt="Andaman" />
                </div>
            </div>
        </div>
    </div>
    <section id="destination-welcome" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-3xl md:text-4xl font-bold text-gray-800 mb-8" data-aos="fade-up">Andaman Travel
                Guide
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                <!-- Carousel -->
                <div class="lg:col-span-2 order-2 lg:order-1" data-aos="fade-right">
                    <div id="imageSlider" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-content="content-andaman-welcome">
                                <img src="images/andaman/Andaman.png" alt="Welcome to Andaman" class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-content="content-andaman-pristine-beaches">
                                <img src="images/andaman/Pristine Beaches Andaman.png" alt="Pristine Beaches"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-content="content-andaman-port-blair">
                                <img src="images/andaman/Port Blair.png" alt="Port Blair" class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-content="content-andaman-scenic-islands">
                                <img src="images/andaman/Scenic Islands andaman.png" alt="Scenic Islands"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-content="content-andaman-resorts-stays">
                                <img src="images/andaman/Resorts & Stays.png" alt="Resorts & Stays"
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
                        <button class="active" data-content="content-andaman-welcome">Welcome to Andaman</button>
                        <button data-content="content-andaman-pristine-beaches">Pristine Beaches</button>
                        <button data-content="content-andaman-port-blair">Port Blair</button>
                        <button data-content="content-andaman-scenic-islands">Scenic Islands</button>
                        <button data-content="content-andaman-resorts-stays">Resorts & Stays</button>
                    </div>

                    <div id="content-andaman-welcome" class="content-section active">
                        <h2 class="section-title">Welcome to Andaman</h2>
                        <p>The Andaman Islands offer a tropical escape with turquoise waters, golden beaches, and lush
                            forests. Dive
                            into coral reefs, relax on secluded shores, or explore charming villages. Beyond a beach
                            getaway, Andaman
                            promises adventure and peace amid timeless beauty. The ocean shares ancient tales, while
                            each sunrise
                            feels enchanting. This paradise invites you to embrace nature's wonders, where every moment
                            unveils a new
                            delight. Whether seeking thrill or serenity, Andaman's pristine landscapes ensure an
                            unforgettable journey
                            into a world of natural splendor.</p>
                    </div>

                    <div id="content-andaman-pristine-beaches" class="content-section">
                        <h2 class="section-title">Pristine Beaches</h2>
                        <p>Andaman's pristine beaches, like Radhanagar and Corbyn's Cove, feature soft sands and clear
                            waves. Palm
                            trees sway with the sea breeze, creating a perfect spot for sunbathing or swimming. Each
                            shore feels
                            private, where time slows as waves gently lap. Nature's beauty shines endlessly, offering a
                            dreamy escape.
                            Whether you bask in the sun or stroll along the coast, these beaches embody tranquility.
                            Every visit to
                            Andaman's shores is a refreshing plunge into a serene, untouched paradise.</p>
                    </div>

                    <div id="content-andaman-port-blair" class="content-section">
                        <h2 class="section-title">Port Blair</h2>
                        <p>Port Blair, Andaman's lively capital, blends history and nature. Explore Cellular Jail,
                            stroll Marina
                            Park, or shop at Aberdeen Bazaar for local crafts. This gateway to island adventures echoes
                            India's
                            freedom struggle through museums and sites. Warm island vibes mix with the past, making it
                            Andaman's
                            heart. From historic landmarks to bustling streets, Port Blair offers a rich experience
                            where heritage
                            meets modern life in a captivating coastal setting.</p>
                    </div>

                    <div id="content-andaman-scenic-islands" class="content-section">
                        <h2 class="section-title">Scenic Islands</h2>
                        <p>Andaman's scenic islands, including Havelock, Neil, and Ross, dazzle with coral reefs and
                            mangroves. Boat
                            rides uncover hidden coves, while diving reveals an underwater paradise. Each island's
                            serenity paints a
                            natural masterpiece with sea, sky, and land. Relax or explore the tranquil beauty of island
                            life. These
                            spots are living stories of nature's artistry, offering a unique journey through Andaman's
                            diverse and
                            stunning island landscapes.</p>
                    </div>

                    <div id="content-andaman-resorts-stays" class="content-section">
                        <h2 class="section-title">Resorts & Stays</h2>
                        <p>Stay in Andaman's beachside resorts, eco-cottages, or luxury retreats, waking to waves and
                            sunsets. Enjoy
                            candlelit dinners by the shore, blending comfort with island magic. From budget stays to
                            lavish escapes,
                            hospitality here is warm and inviting. Every stay feels like paradise, leaving a lasting
                            memory. Whether
                            you choose simplicity or luxury, Andaman's accommodations enhance your trip, making each
                            night as
                            memorable as the day's adventures.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PACKAGES -->
    <section id="destination" class="py-4">
        <div class="container-fluid">
            <h2 class="text-center fw-bold">Andaman Travel Packages</h2>
            
            <!-- Package expiry info alert -->
            <div class="alert alert-info mx-3 mb-4">
                <h5>Package Expiry Notifications</h5>
                <p>We automatically send email reminders for packages expiring in 5-7 days.</p>
                <a href="package_reminder.php" class="btn btn-sm btn-outline-primary">Check All Packages</a>
            </div>
            
            <div class="filter-bar bg-white shadow-sm rounded-pill p-3 mb-4">
                <div id="myBtnContainer" class="d-flex flex-wrap justify-content-center gap-2">
                    <button class="btn filter-btn active rounded-pill px-3 py-2" onclick="filterSelection('all')">All
                        Packages</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-4n5d')">4
                        Nights</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-5n6d')">5
                        Nights</button>
                    <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-6n7d')">6
                        Nights</button>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-4 g-3 filterable">
                <?php
                // Load package data from JSON file
                $packagesJson = file_get_contents('packages.json');
                $packagesData = json_decode($packagesJson, true);
                $andamanPackages = array();
                
                // Filter Andaman packages
                foreach ($packagesData['packages'] as $package) {
                    if ($package['page'] === 'andaman.php') {
                        $andamanPackages[] = $package;
                    }
                }
                
                // If no packages found in JSON, use the default ones
                if (empty($andamanPackages)) {
                    $andamanPackages = array(
                        array(
                            'id' => 'andaman_1',
                            'title' => 'Andaman Serenity',
                            'nights' => '4 Nights/5 Days',
                            'price' => '₹17,990/-',
                            'image' => 'images/andaman/Andaman Serenity.png',
                            'url' => 'https://www.zenithholidays.com/holiday/details?id=6690d75e6f18f67e1241938f&currency=INR',
                            'expiry' => '2025-10-25 23:59:59'
                        ),
                        array(
                            'id' => 'andaman_2',
                            'title' => 'Waves & Wonders of Andaman',
                            'nights' => '5 Nights/6 Days',
                            'price' => '₹21,990/-',
                            'image' => 'images/andaman/Waves & Wonders of Andaman.png',
                            'url' => 'https://www.zenithholidays.com/holiday/details?id=686ba884aa69db0a5f01aadf&currency=INR',
                            'expiry' => '2025-11-20 23:59:59'
                        ),
                        array(
                            'id' => 'andaman_3',
                            'title' => 'Andaman Paradise',
                            'nights' => '5 Nights/6 Days',
                            'price' => '₹22,490/-',
                            'image' => 'images/andaman/Andaman Paradise.png',
                            'url' => 'https://www.zenithholidays.com/holiday/details?id=688afd7a405eb70aa7967724&currency=INR',
                            'expiry' => '2025-11-15 23:59:59'
                        ),
                        array(
                            'id' => 'andaman_4',
                            'title' => 'Andaman Marine Magic',
                            'nights' => '6 Nights/7 Days',
                            'price' => '₹25,990/-',
                            'image' => 'images/andaman/Andaman Marine Magic.png',
                            'url' => 'https://www.zenithholidays.com/holiday/details?id=688b0bab405eb70aa7967a89&currency=INR',
                            'expiry' => '2025-12-10 23:59:59'
                        ),
                        array(
                            'id' => 'andaman_5',
                            'title' => 'Magical Andaman Ex-Kolkata',
                            'nights' => '5 Nights/6 Days',
                            'price' => '₹59,990/-',
                            'image' => 'images/andaman/Magical Andaman Ex-Kolkata.png',
                            'url' => 'https://www.zenithholidays.com/holiday/details?id=680b5f0ade1bec1674af727f&currency=INR',
                            'expiry' => '2025-10-30 23:59:59'
                        )
                    );
                }
                
                // Display packages with expiry information
                foreach ($andamanPackages as $index => $pkg) {
                    $today = new DateTime();
                    $expiry = new DateTime($pkg['expiry']);
                    $daysLeft = (int)$today->diff($expiry)->format("%r%a");
                    
                    $cardClass = "";
                    $expiryAlert = "";
                    
                    if ($today > $expiry) {
                        $cardClass = "expired";
                        $expiryAlert = '<div class="expiry-alert alert alert-danger py-1 mb-2"><small>Expired on: '.$expiry->format('d M Y').'</small></div>';
                    } elseif ($daysLeft <= 7) {
                        $cardClass = "expiring-soon";
                        $expiryAlert = '<div class="expiry-alert alert alert-warning py-1 mb-2"><small>Expires in: '.$daysLeft.' days ('.$expiry->format('d M Y').')</small></div>';
                    }
                    
                    // Determine nights category for filtering
                    $nightsCategory = "";
                    if (strpos($pkg['nights'], '4 Nights') !== false) {
                        $nightsCategory = "pkg-4n5d";
                    } elseif (strpos($pkg['nights'], '5 Nights') !== false) {
                        $nightsCategory = "pkg-5n6d";
                    } elseif (strpos($pkg['nights'], '6 Nights') !== false) {
                        $nightsCategory = "pkg-6n7d";
                    }
                    
                    echo '
                    <div class="filterDiv all '.$nightsCategory.' card shadow-sm border-0 h-100 '.$cardClass.'">
                        <a href="'.$pkg['url'].'"><img
                                src="'.$pkg['image'].'" class="card-img-top" alt="'.$pkg['title'].'"></a>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">'.$pkg['title'].'</h5>
                            <p class="card-text text-muted mb-1">'.$pkg['nights'].'</p>
                            '.$expiryAlert.'
                            <div class="d-flex justify-content-between align-items-center">
                                <div><small class="text-muted">Starting from</small><span
                                        class="h5 fw-bold text-dark d-block">'.$pkg['price'].'</span></div>
                                <a href="'.$pkg['url'].'"
                                    class="btn btn-warning rounded-pill px-4">View</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>
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