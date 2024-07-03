<?php
session_start(); // Start or resume the session

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.html"); // Redirect to login page if not logged in
    exit; // Stop further execution
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1> 
    <p>This is the welcome page for logged-in users.</p>

    <a href="logout.php">Logout</a>
</body>
</html>
