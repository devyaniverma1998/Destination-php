<?php
require_once __DIR__ . '/mail_config.php';

// Get all packages
$allPackages = getAllPackages();
$today = new DateTime();

// Count packages by status
$expiredCount = 0;
$expiringCount = 0;
$activeCount = 0;

foreach ($allPackages as $pkg) {
    try {
        $expiry = new DateTime($pkg['expiry']);
        $daysLeft = (int)$today->diff($expiry)->format("%r%a");
        
        if ($daysLeft < 0) {
            $expiredCount++;
        } elseif ($daysLeft <= 7) {
            $expiringCount++;
        } else {
            $activeCount++;
        }
    } catch (Exception $e) {
        // Skip packages with invalid dates
        continue;
    }
}

// Get all destination pages
$destinationPages = getAllDestinationPages();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Zenith Holidays</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .dashboard-card {
            border-radius: 10px;
            padding: 20px;
            color: white;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .card-active { background: linear-gradient(45deg, #28a745, #20c997); }
        .card-expiring { background: linear-gradient(45deg, #ffc107, #fd7e14); }
        .card-expired { background: linear-gradient(45deg, #dc3545, #e83e8c); }
        .destination-list {
            max-height: 400px;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-cog me-2"></i>Admin Dashboard
            </a>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="mb-4">Package Management System</h2>
        
        <div class="row">
            <div class="col-md-4">
                <div class="dashboard-card card-active">
                    <h3><?php echo $activeCount; ?></h3>
                    <p>Active Packages</p>
                    <i class="fas fa-check-circle fa-2x float-end"></i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-card card-expiring">
                    <h3><?php echo $expiringCount; ?></h3>
                    <p>Expiring Soon</p>
                    <i class="fas fa-clock fa-2x float-end"></i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-card card-expired">
                    <h3><?php echo $expiredCount; ?></h3>
                    <p>Expired Packages</p>
                    <i class="fas fa-times-circle fa-2x float-end"></i>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <a href="package_reminder.php?send_reminders=true" class="btn btn-warning btn-sm mb-2">
                            <i class="fas fa-envelope me-1"></i> Send Expiry Reminders
                        </a>
                        <a href="packages.json" target="_blank" class="btn btn-info btn-sm mb-2 ms-2">
                            <i class="fas fa-file-code me-1"></i> Edit Packages JSON
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Destinations</h5>
                    </div>
                    <div class="card-body destination-list">
                        <div class="row">
                            <?php foreach ($destinationPages as $page): 
                                $pageName = str_replace('.php', '', $page);
                                $pagePackages = getPackagesByPage($page);
                                $packageCount = count($pagePackages);
                            ?>
                            <div class="col-md-6 mb-2">
                                <a href="<?php echo $page; ?>" class="text-decoration-none">
                                    <div class="d-flex justify-content-between align-items-center p-2 border rounded">
                                        <span><?php echo ucfirst($pageName); ?></span>
                                        <span class="badge bg-primary rounded-pill"><?php echo $packageCount; ?></span>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Package Status Report</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Package</th>
                                <th>Page</th>
                                <th>Expiry Date</th>
                                <th>Days Left</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($allPackages as $pkg): 
                                $expiry = new DateTime($pkg['expiry']);
                                $daysLeft = (int) $today->diff($expiry)->format("%r%a");
                                
                                if ($daysLeft < 0) {
                                    $status = "Expired";
                                    $statusClass = "danger";
                                } elseif ($daysLeft <= 7) {
                                    $status = "Expiring Soon";
                                    $statusClass = "warning";
                                } else {
                                    $status = "Active";
                                    $statusClass = "success";
                                }
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($pkg['title']) ?></td>
                                <td><?= $pkg['page'] ?></td>
                                <td><?= $expiry->format('d M Y H:i') ?></td>
                                <td><?= $daysLeft ?></td>
                                <td><span class="badge bg-<?php echo $statusClass; ?>"><?= $status ?></span></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>