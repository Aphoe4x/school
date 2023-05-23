<?php
// Start the session
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: pages-login.php");
    exit();
}

// Retrieve the username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Authenticated Page</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>This is the authenticated page. Only logged-in users can access this page.</p>
    <p>You can add your content, features, and functionality here.</p>

    <a href="logout.php">Logout</a>
</body>
</html>
