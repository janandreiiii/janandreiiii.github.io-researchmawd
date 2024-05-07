<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success Page</title>
  <!-- Google Fonts for Material You design -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500&display=swap">
  <!-- Custom CSS for Material You inspired design -->
  <style>
    body {
      font-family: 'Google Sans', sans-serif;
      background-color: #f3f4f6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .success-container {
      background-color: #fff;
      border-radius: 16px;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 320px;
      text-align: center;
    }

    .success-container h2 {
      margin-bottom: 30px;
    }

    .success-message {
      color: #6200ee;
      font-size: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="success-container">
    <h2>Success!</h2>
    <p class="success-message">You have successfully signed up.</p>
  </div>
</body>
</html>
<?php
// Redirect to the landing page of the signed-in user
header("Location: landingpage.php");
exit;
?>
