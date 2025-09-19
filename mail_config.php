<?php
date_default_timezone_set('Asia/Kolkata');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
require __DIR__ . '/PHPMailer/src/Exception.php';

// SMTP Configuration
function getConfig() {
    return [
        'smtp_host' => 'smtp.gmail.com',
        'smtp_username' => 'design@zenithholidays.com',
        'smtp_password' => 'pzuo itob lsiu bfmh', // Replace with your actual password
        'smtp_secure' => 'tls',
        'smtp_port' => 587,
        'from_email' => 'design@zenithholidays.com',
        'from_name' => 'Zenith Holidays',
        'admin_email' => 'design@zenithholidays.com' // Email to receive notifications
    ];
}

function sendMail($to, $subject, $message, $isHTML = false) {
    $config = getConfig();
    
    $mail = new PHPMailer(true);
    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = $config['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['smtp_username'];
        $mail->Password = $config['smtp_password'];
        $mail->SMTPSecure = $config['smtp_secure'];
        $mail->Port = $config['smtp_port'];

        // Email headers
        $mail->setFrom($config['from_email'], $config['from_name']);
        $mail->addAddress($to);

        // Content
        $mail->isHTML($isHTML);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Mailer Error: {$mail->ErrorInfo}");
        return "Mailer Error: {$mail->ErrorInfo}";
    }
}

// Function to get all packages
function getAllPackages() {
    $jsonFile = __DIR__ . '/packages.json';
    
    if (!file_exists($jsonFile)) {
        return [];
    }
    
    $jsonData = file_get_contents($jsonFile);
    $data = json_decode($jsonData, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log("Error parsing packages.json: " . json_last_error_msg());
        return [];
    }
    
    return $data['packages'] ?? [];
}

// Function to get packages by page
function getPackagesByPage($pageName) {
    $allPackages = getAllPackages();
    $filteredPackages = array_filter($allPackages, function($pkg) use ($pageName) {
        return $pkg['page'] === $pageName;
    });
    return array_values($filteredPackages);
}

// Function to check expiring packages
function getExpiringPackages($daysThreshold = 7) {
    $allPackages = getAllPackages();
    $today = new DateTime();
    $expiringPackages = [];
    
    foreach ($allPackages as $pkg) {
        try {
            $expiry = new DateTime($pkg['expiry']);
            $interval = $today->diff($expiry);
            $daysLeft = (int)$interval->format("%r%a");
            
            if ($daysLeft >= 0 && $daysLeft <= $daysThreshold) {
                $pkg['days_left'] = $daysLeft;
                $expiringPackages[] = $pkg;
            }
        } catch (Exception $e) {
            error_log("Invalid expiry date for package: " . $pkg['title']);
            continue;
        }
    }
    
    return $expiringPackages;
}

// Function to get all unique destination pages
function getAllDestinationPages() {
    $allPackages = getAllPackages();
    $pages = [];
    
    foreach ($allPackages as $pkg) {
        if (!in_array($pkg['page'], $pages)) {
            $pages[] = $pkg['page'];
        }
    }
    
    sort($pages);
    return $pages;
}

// Get all packages
$allPackages = getAllPackages();
$today = new DateTime();

// Count expired and expiring packages
$expiredCount = 0;
$expiringCount = 0;

foreach ($allPackages as $pkg) {
    try {
        $expiry = new DateTime($pkg['expiry']);
        $daysLeft = (int)$today->diff($expiry)->format("%r%a");
        
        if ($daysLeft < 0) {
            $expiredCount++;
        } elseif ($daysLeft <= 7) {
            $expiringCount++;
        }
    } catch (Exception $e) {
        continue;
    }
}
?>