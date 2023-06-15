<?php
// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

// Perform necessary validations
// ...

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "school";

// var_dump($_POST);

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the user data into the database
$insertQuery = "INSERT INTO users (first_name, last_name, email, password, address, city, state,)
                VALUES ('$first_name', '$last_name', '$email', '$password', '$address', '$city', '$state')";

                var_dump($insertQuery);

if ($conn->query($insertQuery) === true) {
    echo "Sign-up successful!";
} else {
    echo $conn->error;
    echo '<br>';
    echo "Sign-up failed. Please try again later.";
}

// Close the database connection
$conn->close();
?>