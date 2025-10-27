<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    header("Location: auth/login.php");
    exit;
}

switch ($_SESSION['role']) {
    case 'owner':
        header("Location: pages/dashboard.php");
        exit;
    case 'staff':
        header("Location: pages/staff.php");
        exit;
    default:
        header("Location: auth/logout.php");
        exit;
}
