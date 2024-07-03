<?php
session_start();  // Start or resume the session

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page (or any other desired page)
header("Location: index.html"); // Replace with your login page filename
exit; 
?>
