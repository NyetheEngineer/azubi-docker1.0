<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Hardcoded credentials (Insecure for real applications!)
  $validUsername = "azubi";
  $validPassword = "cloud";

  // Basic validation
  if ($username === $validUsername && $password === $validPassword) {
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $username; // Store username in session for welcome page
    header("Location: welcome.php");
    exit;
  } else {
    // Don't reveal specific details about the incorrect input
    $errorMessage = "Invalid username or password";
    echo $errorMessage;
  }
}
?>
