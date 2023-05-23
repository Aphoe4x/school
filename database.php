<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$database = "school";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function executeQuery($query) {
    global $conn;
    $result = $conn->query($query);
    return $result;
}

// Function to fetch a single row from a query result as an associative array
function fetchSingleRow($result) {
    return $result->fetch_assoc();
}

// Function to fetch all rows from a query result as an array of associative arrays
function fetchAllRows($result) {
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

// Function to get the number of rows returned by a query
function getRowCount($result) {
    return $result->num_rows;
}
$conn->close();
?>
