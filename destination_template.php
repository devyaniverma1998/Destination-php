<?php
require_once __DIR__ . '/mail_config.php';

// Get the destination name from the URL
$destination = basename($_SERVER['PHP_SELF'], '.php');
$pagePackages = getPackagesByPage($destination . '.php');

// Set page title
$pageTitle = ucfirst($destination) . ' Travel Packages';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $pageTitle; ?></title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .expiring-soon { border: 2px solid #ffc107; position: relative; }
    .expiring-soon::before {
      content: "Expiring Soon";
      position: absolute; top: 10px; right: 10px;
      background: #ffc107; color: #000; padding: 5px 10px;
      border-radius: 4px; font-weight: bold; font-size: 12px; z-index: 10;
    }
    .expired { opacity: 0.7; filter: grayscale(50%); }
    .expired::before {
      content: "Expired";
      position: absolute; top: 10px; right: 10px;
      background: #dc3545; color: #fff; padding: 5px 10px;
      border-radius: 4px; font-weight: bold; font-size: 12px; z-index: 10;
    }
    .destination-header {
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1488646953014-85cb44e25828?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 60px 0;
      margin-bottom: 30px;
      text-align: center;
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
      <a class="nav-link" href="index.php">All Destinations</a>
      <a class="nav-link" href="package_reminder.php">Check Expiry</a>
    </div>
  </div>
</nav>

<div class="destination-header">
  <div class="container">
    <h1 class="display-4 fw-bold"><?php echo ucfirst($destination); ?> Travel Packages</h1>
    <p class="lead">Explore our exclusive <?php echo ucfirst($destination); ?> holiday packages</p>
  </div>
</div>

<div class="container py-5">
  <div class="alert alert-info mb-4">
    <h5>Package Expiry Notifications</h5>
    <p>We automatically send email reminders for packages expiring in 5-7 days.</p>
    <a href="package_reminder.php" class="btn btn-sm btn-outline-primary">Check Expiring Packages</a>
  </div>
  
  <div class="row g-3">
    <?php 
    if (empty($pagePackages)) {
        echo '<div class="col-12"><div class="alert alert-warning">No packages found for this destination.</div></div>';
    } else {
        $today = new DateTime();
        foreach ($pagePackages as $pkg): 
          $expiry = new DateTime($pkg['expiry']);
          $now = new DateTime();
          $daysLeft = (int)$today->diff($expiry)->format("%r%a");
          
          $cardClass = "";
          if ($now > $expiry) {
            $cardClass = "expired";
          } elseif ($daysLeft <= 7) {
            $cardClass = "expiring-soon";
          }
        ?>
          <div class="col-md-4">
            <div class="card h-100 shadow-sm <?php echo $cardClass; ?>">
              <a href="<?= $pkg['url'] ?>"><img src="<?= $pkg['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($pkg['title']) ?>" style="height: 200px; object-fit: cover;"></a>
              <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($pkg['title']) ?></h5>
                <p class="text-muted"><?= $pkg['nights'] ?></p>
                
                <?php if ($now > $expiry): ?>
                  <div class="alert alert-danger py-1 mb-2">
                    <small>Expired on: <?= $expiry->format('d M Y') ?></small>
                  </div>
                <?php elseif ($daysLeft <= 7): ?>
                  <div class="alert alert-warning py-1 mb-2">
                    <small>Expires in: <?= $daysLeft ?> days (<?= $expiry->format('d M Y') ?>)</small>
                  </div>
                <?php endif; ?>
                
                <div class="d-flex justify-content-between align-items-center">
                  <div><small>Starting from</small><br><span class="fw-bold"><?= $pkg['price'] ?></span></div>
                  <a href="<?= $pkg['url'] ?>" class="btn btn-warning">View Details</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; 
    }?>
  </div>
</div>

<footer class="bg-dark text-white text-center py-4 mt-5">
  <div class="container">
    <p>&copy; 2023 Zenith Holidays. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>