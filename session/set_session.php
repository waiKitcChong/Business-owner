<?php
session_start();
$_SESSION["user_id"] = $_POST["user_id"];
$_SESSION["role"] = $_POST["role"];
$_SESSION["name"] = $_POST["name"];
echo "Session set successfully";
?>

