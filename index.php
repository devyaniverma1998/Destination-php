<?php
require_once __DIR__ . '/mail_config.php';

$destinationPages = getAllDestinationPages();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith Holidays - Package Management</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            margin-bottom: 40px;
        }

        .destination-card {
            transition: transform 0.3s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .destination-card:hover {
            transform: translateY(-5px);
        }

        .destination-card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-globe-asia me-2"></i>Zenith Holidays
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="package_reminder.php">Check Expiry</a>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold">Zenith Holidays</h1>
            <p class="lead">Discover Amazing Travel Packages</p>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center mb-4">Our Destinations</h2>

        <div class="row">
            <?php
            if (empty($destinationPages)) {
                echo '<div class="col-12"><div class="alert alert-warning">No destinations found. Please add packages to the system.</div></div>';
            } else {
                foreach ($destinationPages as $page):
                    $pageName = str_replace('.php', '', $page);
                    $pagePackages = getPackagesByPage($page);
                    $packageCount = count($pagePackages);
                    ?>
                    <div class="col-md-3 mb-4">
                        <div class="destination-card card h-100">
                            <a href="<?php echo $page; ?>">
                                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                    class="card-img-top" alt="<?php echo ucfirst($pageName); ?>">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ucfirst($pageName); ?></h5>
                                <p class="card-text"><?php echo $packageCount; ?> package(s) available</p>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="<?php echo $page; ?>" class="btn btn-primary btn-sm">View Packages</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            } ?>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p>&copy; 2023 Zenith Holidays. All rights reserved.</p>
            <p>Package Management System</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>