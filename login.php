<?php
// login.php

// Define valid credentials
$valid_credentials = [
    'Anup' => 'Anup123',
    'Sushant' => 'Sushant123',
    'Diperson' => 'Diperson123'
];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate credentials
    if (array_key_exists($username, $valid_credentials) && $valid_credentials[$username] === $password) {
        // Redirect to YouTube on successful login
        header('Location: https://www.youtube.com');
        exit();
    } else {
        // Redirect back to login page with an error (Optional)
        echo "<script>alert('Invalid username or password.'); window.location.href = 'index.html';</script>";
    }
}
?>
