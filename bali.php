<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bali</title>

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
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.4)), url('images/bali/Bali Saver.png');
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

  <!-- BANNER -->
  <div class="container-fluid py-5 banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="text-white banner-h">Bali</h1>
          <p class="banner-text">
            Bali is paradise redefined—emerald rice terraces, mystical temples, and beaches that glow at
            sunset. From
            Ubud’s cultural heart to Seminyak’s luxury vibes, Bali blends spirituality and adventure like
            nowhere else.
            Discover hidden waterfalls, snorkel vibrant reefs, or just soak in the island’s slow magic.
          </p>
          <a href="https://www.zenithholidays.com/holiday/search?searchby=Bali&type=1&category=&month="
            class="more">BOOK NOW</a>
        </div>
        <div class="col-md-6 mt-5 banner-img">
          <img src="images/bali/Bali Saver.png" class="d-block w-100 bn-img"
            style="border-radius: 20px; border: 1px solid white; height: 300px;" alt="Bali Beach" />
        </div>
      </div>
    </div>
  </div>

  <section id="destination-welcome" class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-center text-3xl md:text-4xl font-bold text-gray-800 mb-8" data-aos="fade-up">Bali Travel Guide
      </h2>
      <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
        <!-- Carousel -->
        <div class="lg:col-span-2 order-2 lg:order-1" data-aos="fade-right">
          <div id="imageSlider" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
              <div class="carousel-item active" data-content="content-bali-welcome">
                <img src="images/bali/Bali.png" alt="Welcome to Bali" class="d-block w-100">
              </div>
              <div class="carousel-item" data-content="content-bali-atv-quad-bike">
                <img src="images/bali/ATV Quad Bike Bali with Waterfall & Gorilla Cave.png" alt="Waterfall & Gorilla Cave" class="d-block w-100">
              </div>
              <div class="carousel-item" data-content="content-bali-swing-ubud">
                <img src="images/bali/Bali Swing Ubud.png" alt="Bali Swing Ubud" class="d-block w-100">
              </div>
              <div class="carousel-item" data-content="content-bali-monkey-forest">
                <img src="images/bali/Sacred Monkey Forest Sanctuary.png" alt="Monkey Forest Sanctuary" class="d-block w-100">
              </div>
              <div class="carousel-item" data-content="content-bali-elephant-cave">
                <img src="images/bali/Elephant Cave (Goa Gajah).png" alt="Elephant Cave (Goa Gajah)" class="d-block w-100">
              </div>
              <div class="carousel-item" data-content="content-bali-snorkeling">
                <img src="images/bali/Snorkeling Tour at Blue Lagoon Beach.png" alt="Lagoon Beach" class="d-block w-100">
              </div>
              <div class="carousel-item" data-content="content-bali-ubud-tour">
                <img src="images/bali/Ubud City Tour.png" alt="Ubud City Tour" class="d-block w-100">
              </div>
              <div class="carousel-item" data-content="content-bali-nusa-penida">
                <img src="images/bali/Nusa Penida Island.png" alt="Nusa Penida Island" class="d-block w-100">
              </div>
              <div class="carousel-item" data-content="content-bali-lempuyang-temple">
                <img src="images/bali/Lempuyang Temple.png" alt="Lempuyang Temple" class="d-block w-100">
              </div>
              <div class="carousel-item" data-content="content-bali-aling-aling">
                <img src="images/bali/Aling-Aling Waterfall.png" alt="Aling-Aling Waterfall" class="d-block w-100">
              </div>
              <div class="carousel-item" data-content="content-bali-ceking-rice">
                <img src="images/bali/Ceking Rice Terrace.png" alt="Ceking Rice Terrace" class="d-block w-100">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imageSlider" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageSlider" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="lg:col-span-3 order-1 lg:order-2 content-container" data-aos="fade-left">
          <div class="guide-nav" data-aos="fade-up" data-aos-delay="100">
            <button class="active" data-content="content-bali-welcome">Welcome to Bali</button>
            <button data-content="content-bali-atv-quad-bike">Waterfall & Gorilla Cave</button>
            <button data-content="content-bali-swing-ubud">Bali Swing Ubud</button>
            <button data-content="content-bali-monkey-forest">Monkey Forest Sanctuary</button>
            <button data-content="content-bali-elephant-cave">Elephant Cave (Goa Gajah)</button>
            <button data-content="content-bali-snorkeling">Lagoon Beach</button>
            <button data-content="content-bali-ubud-tour">Ubud City Tour</button>
            <button data-content="content-bali-nusa-penida">Nusa Penida Island</button>
            <button data-content="content-bali-lempuyang-temple">Lempuyang Temple</button>
            <button data-content="content-bali-aling-aling">Aling-Aling Waterfall</button>
            <button data-content="content-bali-ceking-rice">Ceking Rice Terrace</button>
          </div>

          <div id="content-bali-welcome" class="content-section active">
            <h2 class="section-title">Welcome to Bali</h2>
            <p>Bali mesmerizes with Ubud’s misty jungles, Komodo dragons, and oceans shifting from turquoise to ink.
              Sumatra’s orangutans sway like poets amid tangled fur. This paradise blends wild adventures with serene
              beauty. Explore lush forests, vibrant reefs, and rich culture. Bali and Sumatra offer a journey where
              nature’s power meets tranquility. Every moment unveils new wonders, drawing travelers to its mystical
              embrace.</p>
          </div>

          <div id="content-bali-atv-quad-bike" class="content-section">
            <h2 class="section-title">Waterfall & Gorilla Cave</h2>
            <p>The ATV Quad Bike tour in Bali offers adventure through muddy trails and river splashes. Weave through
              rice paddies, discover waterfalls, and explore the eerie Gorilla Cave. This ride blends thrills with
              nature’s beauty, plunging into Bali’s wild heart. Conquer rugged terrain amid greenery for an adrenaline
              rush. Perfect for thrill-seekers, it’s a memorable escape.</p>
          </div>

          <div id="content-bali-swing-ubud" class="content-section">
            <h2 class="section-title">Bali Swing Ubud</h2>
            <p>The Bali Swing in Ubud lets you soar over jungles, revealing rice terraces and misty peaks. Giant swings
              offer breathtaking views and an exhilarating rush of air. Snap stunning photos amid nature’s splendor.
              This thrilling adventure blends scenic beauty with excitement, creating lasting memories for all.</p>
          </div>

          <div id="content-bali-monkey-forest" class="content-section">
            <h2 class="section-title">Monkey Forest Sanctuary</h2>
            <p>Ubud’s Monkey Forest Sanctuary is a mystical realm where macaques rule. Ancient temples decay under
              banyan roots, while cheeky monkeys roam. Mossy statues and towering trees cast an eerie vibe. Wander paths
              to find shrines amid lush greenery, blending wildlife with spirituality in Bali’s wild heart.</p>
          </div>

          <div id="content-bali-elephant-cave" class="content-section">
            <h2 class="section-title">Elephant Cave (Goa Gajah)</h2>
            <p>Goa Gajah hides mystery behind a carved monstrous mouth, leading to ancient meditation chambers. Jungle
              ruins and stone pools outside add allure. This site blends history with nature, offering a glimpse into
              Bali’s past. Explore carvings and feel sacred energy in a serene retreat.</p>
          </div>

          <div id="content-bali-snorkeling" class="content-section">
            <h2 class="section-title">Lagoon Beach</h2>
            <p>Lagoon Beach reveals a vibrant underwater world with neon fish and gliding turtles. Framed by cliffs, its
              quiet sands offer a peaceful start. Snorkel in crystal waters to explore colorful reefs. This tour blends
              relaxation with adventure, perfect for nature lovers.</p>
          </div>

          <div id="content-bali-ubud-tour" class="content-section">
            <h2 class="section-title">Ubud City Tour</h2>
            <p>Ubud, Bali’s cultural heart, blends art, tradition, and nature. Visit markets, enjoy Royal Palace dances,
              and see the Saraswati Temple. Creativity thrives in shops and rice fields. Stroll lush streets for an
              authentic vibe, diving into Bali’s rich heritage.</p>
          </div>

          <div id="content-bali-nusa-penida" class="content-section">
            <h2 class="section-title">Nusa Penida Island</h2>
            <p>Nusa Penida stuns with cliffs dropping into turquoise waves and Angel’s Billabong’s infinity pool. Manta
              rays glide below in this rugged paradise. Explore hidden beaches and dramatic coastlines for unforgettable
              views. A haven for adventurers seeking solitude.</p>
          </div>

          <div id="content-bali-lempuyang-temple" class="content-section">
            <h2 class="section-title">Lempuyang Temple</h2>
            <p>Lempuyang Temple’s “Gates of Heaven” reward a 1,700-step climb with stunning views and sacred peace. The
              iconic gate frames Mount Agung, exuding history amid lush surroundings. This spiritual site connects you
              to Bali’s roots, offering a serene escape.</p>
          </div>

          <div id="content-bali-aling-aling" class="content-section">
            <h2 class="section-title">Aling-Aling Waterfall</h2>
            <p>Aling-Aling Waterfall thrills with cliff jumps and natural slides in a lush valley. Roaring cascades soak
              you in wild energy. Surrounded by greenery, each leap offers exhilaration. Perfect for the bold, it’s an
              adventurous escape.</p>
          </div>

          <div id="content-bali-ceking-rice" class="content-section">
            <h2 class="section-title">Ceking Rice Terrace</h2>
            <p>Ceking Rice Terrace features emerald fields tiered down hillsides with ancient irrigation. Water reflects
              the sky at sunset, glowing over lush paddies. Wander paths to enjoy agricultural beauty, a serene retreat
              amid nature’s artistry.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- PACKAGES SECTION -->
<section id="destination" class="py-4">
    <div class="container-fluid">
        <h2 class="text-center fw-bold">Bali Travel Packages</h2>
        
        <!-- Filter Buttons -->
        <div class="filter-bar bg-white shadow-sm rounded-pill p-3 mb-4">
            <div id="myBtnContainer" class="d-flex flex-wrap justify-content-center gap-2">
                <button class="btn filter-btn active rounded-pill px-3 py-2" onclick="filterSelection('all')">All Packages</button>
                <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-4n5d')">4 Nights</button>
                <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-5n6d')">5 Nights</button>
                <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-7n8d')">7 Nights</button>
                <button class="btn filter-btn rounded-pill px-3 py-2" onclick="filterSelection('pkg-9n10d')">9 Nights</button>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 package-container">
            <!-- First Package: Bali Saver - Most affordable 4-night package -->
            <div class="col filterDiv all pkg-4n5d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=686e354caa69db0a5f01e36a&currency=INR">
                        <img src="images/bali/Bali Saver.png" class="card-img-top" alt="Bali Saver" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Bali Saver</h5>
                        <p class="card-text text-muted mb-1">4 Nights/5 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹19,990/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=686e354caa69db0a5f01e36a&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Package: Exciting Bali - Budget-friendly 4-night adventure -->
            <div class="col filterDiv all pkg-4n5d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=6582c2467ad059403f8f1064&currency=INR">
                        <img src="images/bali/Exciting Bali.png" class="card-img-top" alt="Exciting Bali" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Exciting Bali</h5>
                        <p class="card-text text-muted mb-1">4 Nights/5 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹26,490/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=6582c2467ad059403f8f1064&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Package: Bali - Value-packed 4-night experience -->
            <div class="col filterDiv all pkg-4n5d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=687bb143b159dc54ada2ec24&currency=INR">
                        <img src="images/bali/Bali.png" class="card-img-top" alt="Bali" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Bali</h5>
                        <p class="card-text text-muted mb-1">4 Nights/5 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹34,900/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=687bb143b159dc54ada2ec24&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fourth Package: Bali Escape - Relaxing 5-night getaway -->
            <div class="col filterDiv all pkg-5n6d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=657c011223f2f516afca481e&currency=INR">
                        <img src="images/bali/Bali Escape.png" class="card-img-top" alt="Bali Escape" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Bali Escape</h5>
                        <p class="card-text text-muted mb-1">5 Nights/6 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹35,990/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=657c011223f2f516afca481e&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fifth Package: Pristine Bali - Scenic 5-night exploration -->
            <div class="col filterDiv all pkg-5n6d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=68384773d3b95d0a36053362&currency=INR">
                        <img src="images/bali/Pristine Bali.png" class="card-img-top" alt="Pristine Bali" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Pristine Bali</h5>
                        <p class="card-text text-muted mb-1">5 Nights/6 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹36,990/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=68384773d3b95d0a36053362&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Soulful Bali -->
            <div class="col filterDiv all pkg-5n6d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=687644d3b159dc54ada29e1a&currency=INR">
                        <img src="images/bali/Soulful Bali.png" class="card-img-top" alt="Soulful Bali" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Soulful Bali</h5>
                        <p class="card-text text-muted mb-1">5 Nights/6 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹43,990/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=687644d3b159dc54ada29e1a&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bali Experience -->
            <div class="col filterDiv all pkg-5n6d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=6874fff1b159dc54ada27f61&currency=INR">
                        <img src="images/bali/Bali Experience.png" class="card-img-top" alt="Bali Experience" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Bali Experience</h5>
                        <p class="card-text text-muted mb-1">5 Nights/6 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹43,990/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=6874fff1b159dc54ada27f61&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blissful Bali -->
            <div class="col filterDiv all pkg-7n8d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=666a88a68a9f1f193f741318&currency=INR">
                        <img src="images/bali/Blissful Bali.png" class="card-img-top" alt="Blissful Bali" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Blissful Bali</h5>
                        <p class="card-text text-muted mb-1">7 Nights/8 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹46,990/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=666a88a68a9f1f193f741318&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tropical Bali -->
            <div class="col filterDiv all pkg-7n8d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=666a855b8a9f1f193f74128f&currency=INR">
                        <img src="images/bali/Tropical Bali.png" class="card-img-top" alt="Tropical Bali" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Tropical Bali</h5>
                        <p class="card-text text-muted mb-1">7 Nights/8 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹48,990/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=666a855b8a9f1f193f74128f&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Serene Bali -->
            <div class="col filterDiv all pkg-7n8d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=666a825d8a9f1f193f7411f8&currency=INR">
                        <img src="images/bali/Serene Bali.png" class="card-img-top" alt="Serene Bali" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Serene Bali</h5>
                        <p class="card-text text-muted mb-1">7 Nights/8 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹49,490/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=666a825d8a9f1f193f7411f8&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grand Tour of Bali -->
            <div class="col filterDiv all pkg-9n10d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=666a8b838a9f1f193f74146b&currency=INR">
                        <img src="images/bali/Grand Tour of Bali.png" class="card-img-top" alt="Grand Tour of Bali" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Grand Tour of Bali</h5>
                        <p class="card-text text-muted mb-1">9 Nights/10 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹55,990/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=666a8b838a9f1f193f74146b&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bali Trails -->
            <div class="col filterDiv all pkg-5n6d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=6870d9ddb159dc54ada2403b&currency=INR">
                        <img src="images/bali/Bali Trails.png" class="card-img-top" alt="Bali Trails" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Bali Trails</h5>
                        <p class="card-text text-muted mb-1">5 Nights/6 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹67,990/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=6870d9ddb159dc54ada2403b&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beautiful Bali-Ex Kolkata -->
            <div class="col filterDiv all pkg-5n6d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=68105c1e8725510a106ba486&currency=INR">
                        <img src="images/bali/Beautiful Bali-Ex Kolkata.png" class="card-img-top" alt="Beautiful Bali-Ex Kolkata" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Beautiful Bali-Ex Kolkata</h5>
                        <p class="card-text text-muted mb-1">5 Nights/6 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹74,990/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=68105c1e8725510a106ba486&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Highlights Of Bali -->
            <div class="col filterDiv all pkg-5n6d">
                <div class="card shadow-sm border-0 h-100">
                    <a href="https://www.zenithholidays.com/holiday/details?id=6855499ffbba3f0a68f61aa5&currency=INR">
                        <img src="images/bali/Highlights Of Bali.png" class="card-img-top" alt="Highlights Of Bali" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Highlights Of Bali</h5>
                        <p class="card-text text-muted mb-1">5 Nights/6 Days</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><small class="text-muted">Starting from</small><span class="h5 fw-bold text-dark d-block">₹80,990/-</span></div>
                            <a href="https://www.zenithholidays.com/holiday/details?id=6855499ffbba3f0a68f61aa5&currency=INR" class="btn btn-warning rounded-pill px-4">View</a>
                        </div>
                    </div>
                </div>
            </div>
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

// Initialize with all packages shown and then apply 4 Nights filter
document.addEventListener('DOMContentLoaded', function() {
    // First show all packages
    filterSelection('all');
    
    // Then apply 4 Nights filter after a short delay
    setTimeout(function() {
        filterSelection('pkg-4n5d');
        
        // Button को active state में update करें
        var buttons = document.querySelectorAll('.filter-btn');
        buttons.forEach(function(btn) {
            btn.classList.remove('active');
            if (btn.textContent.trim() === '4 Nights') {
                btn.classList.add('active');
            }
        });
    }, 100);
});
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