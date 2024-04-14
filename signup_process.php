<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userType = $_POST['userType'];
    $studentNumber = $_POST['studentNumber'];
    $schoolEmail = $_POST['schoolEmail'];
    $teacherName = $_POST['teacherName'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    /

    header("Location: index-signedin.html?username=" . urlencode($username));
    exit;
} else {
    header("Location: index.html");
    exit;
}
?>
