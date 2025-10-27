<?php
session_start();

if (!isset($allowed_roles)) {
    $allowed_roles = []; 
}


if (!isset($_SESSION["role"])) {
    echo "Please Login before you entering the dashboard!";
    exit();
}


if (!in_array($_SESSION["role"], $allowed_roles)) {
    echo "Access denied: your role (" . htmlspecialchars($_SESSION["role"]) . ") cannot access this page.";
    exit();
}

?>

