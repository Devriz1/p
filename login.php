<?php
// login.php

// Define hardcoded username and password (for demo purposes)
$valid_username = 'risal';
$valid_password = '123'; // In a real application, use hashed passwords

// Retrieve posted data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Basic authentication
if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;
    echo "<h1>Login Successful</h1>";
    // Redirect to another page or dashboard
     header("Location:dashboard.php");
} else {
    echo "<h1>Login Failed</h1>";
    echo "<p>Invalid username or password. Please try again.</p>";
    echo '<a href="adminlogin.html">Back to login</a>';
}
?>
