<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the signup form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validate and sanitize the user input 
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);

    // Hash the password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Store the user's credentials in the database 
    // Database connection details
    $servername = "localhost";
    $db_username = "root";
    $db_password = "123456";
    $database = "school";

    // Create a database connection
    $conn = new mysqli($servername, $db_username, $db_password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Retrieve the submitted username and email from the sign-up form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Check if the username exists
    $usernameQuery = "SELECT * FROM users WHERE username = '$username'";
    $usernameResult = $conn->query($usernameQuery);
    if ($usernameResult->num_rows > 0) {
        // Username already exists, handle the error
        echo "Username already taken.";
        // You may redirect the user back to the sign-up page or display an error message.
        exit;
    }

    // Check if the email exists
    $emailQuery = "SELECT * FROM users WHERE email = '$email'";
    $emailResult = $conn->query($emailQuery);
    if ($emailResult->num_rows > 0) {
        // Email already exists, handle the error
        echo "Email already in use.";
        // You may redirect the user back to the sign-up page or display an error message.
        exit;
    }

    // Check if the username already exists in the database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 0) {
        // Username is available, insert the new user into the database
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
        if ($conn->query($sql) === TRUE) {
            // User registered successfully
            // You can redirect to a login page or display a success message
            header("Location: pages-login.php");
            exit();
        } else {
            // Error inserting the user into the database
            $error = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // Username already exists
        $error = "Username already exists. Please choose a different username.";
    }

    // Close the database connection
    $conn->close();
}
?>

<?php include 'layout/register.php'; ?>