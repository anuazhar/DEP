// includes/db.php
<?php
session_start();

// Database connection details
$servername = "DESKTOP-3KLDLSP";
$username = "root@localhost";
$password = "";
$database = "blogweb";

// Create connection
$conn = new mysql($servername, $username, $password, $database);
?>
