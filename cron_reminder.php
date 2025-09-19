<?php
// This file should be called by a cron job daily
require_once __DIR__ . '/mail_config.php';

$expiringPackages = getExpiringPackages(7);

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
        $subject = "Daily Reminder: " . count($packages) . " packages expiring soon for " . ucfirst($pageName);

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
                <p>This is an automated daily reminder from Zenith Holidays</p>
                <p>&copy; " . date('Y') . " Zenith Holidays. All rights reserved.</p>
            </div>
        </body>
        </html>";

        // Send email
        sendMail($config['admin_email'], $subject, $message, true);
        
        // Add a small delay to avoid rate limiting
        sleep(2);
    }
    
    // Log the operation
    file_put_contents(__DIR__ . '/cron.log', date('Y-m-d H:i:s') . " - Sent reminders for " . count($packagesByPage) . " destinations\n", FILE_APPEND);
} else {
    file_put_contents(__DIR__ . '/cron.log', date('Y-m-d H:i:s') . " - No packages need reminders\n", FILE_APPEND);
}
?>