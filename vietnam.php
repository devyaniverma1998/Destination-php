<?php
require_once __DIR__ . '/mail_config.php';

// Get packages for this page only
$pagePackages = getPackagesByPage('vietnam.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vietnam Packages</title>
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
  </style>
</head>
<body>
<div class="container py-5">
  <h2 class="text-center fw-bold mb-4">Vietnam Travel Packages</h2>
  
  <div class="alert alert-info mb-4">
    <h5>Package Expiry Notifications</h5>
    <p>We automatically send email reminders for packages expiring in 5-7 days.</p>
    <a href="package_reminder.php" class="btn btn-sm btn-outline-primary">Check All Packages</a>
  </div>
  
  <div class="row g-3">
    <?php 
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
          <a href="<?= $pkg['url'] ?>"><img src="<?= $pkg['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($pkg['title']) ?>"></a>
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
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>