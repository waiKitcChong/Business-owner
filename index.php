<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    header("Location: auth/login.php");
    exit;
}

switch ($_SESSION['role']) {
    case 'owner':
        header("Location: business_owner/dashboard.php");
        exit;
    case 'staff':
        header("Location: staff/dashboard.php");
        exit;
    default:
        header("Location: auth/logout.php");
        exit;
}
