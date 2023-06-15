<?php
// Start the session
session_start();

// Check if the user is already logged in, redirect to authenticated page
if (isset($_SESSION['username'])) {
    header("Location: authenticated.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the login form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate and sanitize the user input (you can add more validation if needed)
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // Database connection details
    $servername = "localhost";
    $db_username = "root";
    $db_password = "123456";
    $database = "school";

    // Create a database connection
    $conn = new mysqli($servername, $db_username, $db_password, $database);

    // Query the database to check if the user exists
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    // Check if a user with the given username exists
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

    // Verify the password
    if (password_verify($password, $hashedPassword)) {
        // Password is correct, set session variables and redirect to authenticated page
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
    } else {
        $error = "Invalid username or password.";
    }
    $conn->close();
}
?>
<?php include 'layout/login.php'; ?>


<?php
/*
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from login where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("location:index.php");
        }
        else{
            echo '<script>
            window.location.href = "index.php";
            alert("Login failed. Invalid username or password!!!")
            </script>';
        }
    }
    */
?>


