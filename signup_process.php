<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    // Your validation and processing logic here...

    // For demonstration, simply print the data
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
    echo "User Type: " . $user_type . "<br>";

    // You can redirect the user to another page after successful signup
    header("Location: success.php");
} else {
    // Redirect to the signup page if accessed directly
    header("Location: signup.php");
    exit;
}
?>