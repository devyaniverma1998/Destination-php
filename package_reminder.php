<?php
require_once __DIR__ . '/mail_config.php';

// Get all packages expiring in 5-7 days
$expiringPackages = getExpiringPackages(7);
$results = [];

if (!empty($expiringPackages)) {
    // Group packages by page
    $packagesByPage = [];
    foreach ($expiringPackages as $pkg) {
        if ($pkg['days_left'] >= 5 && $pkg['days_left'] <= 7) {
            $packagesByPage[$pkg['page']][] = $pkg;
        }
    }

    // Send one email per page with all expiring packages
    $config = getConfig();
    foreach ($packagesByPage as $page => $packages) {
        $pageName = str_replace('.php', '', $page);
        $subject = "Reminder: " . count($packages) . " packages expiring soon for " . ucfirst($pageName);

        // HTML email content
        $message = "
        <html>
        <head>
            <title>Package Expiry Reminder</title>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; }
                .header { background-color: #f8f9fa; padding: 20px; text-align: center; }
                .content { padding: 20px; }
                .package-info { background-color: #e9ecef; padding: 15px; border-radius: 5px; margin-bottom: 15px; }
                .footer { background-color: #f8f9fa; padding: 10px; text-align: center; font-size: 12px; color: #6c757d; }
            </style>
        </head>
        <body>
            <div class='header'>
                <h2>Zenith Holidays</h2>
                <h3>Package Expiry Reminder</h3>
            </div>
            <div class='content'>
                <p>Hello Admin,</p>
                <p>The following packages for <strong>" . ucfirst($pageName) . "</strong> will expire soon:</p>";

        foreach ($packages as $pkg) {
            $expiry = new DateTime($pkg['expiry']);
            $message .= "
                <div class='package-info'>
                    <h4>{$pkg['title']}</h4>
                    <p><strong>Duration:</strong> {$pkg['nights']}</p>
                    <p><strong>Price:</strong> {$pkg['price']}</p>
                    <p><strong>Expiry Date:</strong> " . $expiry->format('d M Y H:i') . "</p>
                    <p><strong>Days Left:</strong> {$pkg['days_left']} days</p>
                    <p><a href='{$pkg['url']}'>View Package Details</a></p>
                </div>";
        }

        $message .= "
                <p>Please take necessary action if needed.</p>
            </div>
            <div class='footer'>
                <p>This is an automated reminder from Zenith Holidays</p>
                <p>&copy; " . date('Y') . " Zenith Holidays. All rights reserved.</p>
            </div>
        </body>
        </html>";

        // Send email
        $result = sendMail($config['admin_email'], $subject, $message, true);
        $results[] = "Page '$page': " . ($result === true ? "Reminder sent for " . count($packages) . " packages" : $result);

        // Add a small delay to avoid rate limiting
        sleep(2);
    }
}

// Output results
echo "<!DOCTYPE html>
<html>
<head>
    <title>Package Reminder - Zenith Holidays</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
    <nav class='navbar navbar-dark bg-dark'>
        <div class='container'>
            <a class='navbar-brand' href='index.php'>
                <i class='fas fa-globe-asia me-2'></i>Zenith Holidays
            </a>
        </div>
    </nav>
    
    <div class='container mt-4'>
        <h2>Package Expiry Reminder</h2>
        <div class='alert alert-info'>
            <p>This system checks for packages expiring in the next 7 days and sends email reminders.</p>
            <p>Last check: " . date('d M Y H:i:s') . "</p>
        </div>";

if (!empty($results)) {
    echo "<div class='alert alert-success'>
            <h4>Email Results:</h4>
            <ul>";
    foreach ($results as $result) {
        echo "<li>$result</li>";
    }
    echo "</ul></div>";
} else {
    echo "<div class='alert alert-warning'>No packages require reminders at this time.</div>";
}

// Show all packages and their status
$allPackages = getAllPackages();
$today = new DateTime();

echo "<h3 class='mt-4'>All Packages Status</h3>
        <table class='table table-striped table-bordered'>
            <thead class='table-dark'>
                <tr>
                    <th>Package</th>
                    <th>Page</th>
                    <th>Expiry Date</th>
                    <th>Days Left</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>";

foreach ($allPackages as $pkg) {
    $expiry = new DateTime($pkg['expiry']);
    $daysLeft = (int) $today->diff($expiry)->format("%r%a");

    if ($daysLeft < 0) {
        $status = "Expired";
        $rowColor = "table-danger";
    } elseif ($daysLeft <= 7) {
        $status = "Expiring Soon";
        $rowColor = "table-warning";
    } else {
        $status = "Active";
        $rowColor = "";
    }

    echo "<tr class='$rowColor'>
            <td>{$pkg['title']}</td>
            <td>{$pkg['page']}</td>
            <td>" . $expiry->format('d M Y H:i') . "</td>
            <td>$daysLeft</td>
            <td><span class='badge bg-" . ($status === 'Expired' ? 'danger' : ($status === 'Expiring Soon' ? 'warning' : 'success')) . "'>$status</span></td>
          </tr>";
}

echo "</tbody>
        </table>
        <div class='mt-3'>
            <a href='index.php' class='btn btn-primary'>Back to Home</a>
        </div>
    </div>
</body>
</html>";
?>