<!-- <?php

// session_start();
// session_unset($_SESSION['user_name']);
// session_destroy();

// header('location:../index.php');

?> -->
<?php
session_start();

// Check if the array key exists before accessing it
if (isset($_SESSION['user_name'])) {
    // Access the array key
    $user_name = $_SESSION['user_name'];
    // ... do something with $user_name
}

// Unset all session variables
session_unset();

// Redirect or perform other actions after logout
// ...
header('location:../index.php');
?>
