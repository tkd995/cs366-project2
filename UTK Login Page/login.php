<?php
session_start(); // Start the session

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection parameters
$servername = "localhost"; // Default for XAMPP
$username = "root"; // Default MySQL username in XAMPP
$password = ""; // Default password is empty
$dbname = "test_db"; // Your created database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input directly from the form
    $input_username = $_GET['username'];
    $input_password = $_GET['password'];

    // Debug: Print inputs
    echo "Input Username: " . htmlspecialchars($input_username) . "<br>";
    echo "Input Password: " . htmlspecialchars($input_password) . "<br>";

    // Vulnerable SQL query (this executes against the actual database)
    //admin' OR '1'='1
    //admin'-- 
    //^^makesure there's a space at the end
    //$sql = "SELECT * FROM users WHERE username = '$input_username' AND password = '$input_password'";
    $sql = "INSERT INTO users (username, password) VALUES ('$input_username', '$input_password')";
    // Debug: Print the SQL query
    echo "SQL Query: " . $sql; // Display the SQL query
    //exit(); // Stop execution to see the SQL query

    // Execute the query
    if ($result = $conn->query($sql)) {
        // Check if login is successful
        if ($result->num_rows > 0) {
            // Login successful
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $input_username;
            header("Location: dashboard.php"); // Redirect to dashboard
            exit();
        } /*else {
            // Invalid credentials
            $message = "Invalid username or password.";
            header("Location: index.php?message=" . urlencode($message)); // Redirect back with message
            exit();
        }*/
    } else {
        //die("SQL Error: " . $conn->error); // Handle query execution errors
    }
}

// Close the connection
$conn->close();
?>
