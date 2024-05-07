<?php
// Start or resume a session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page
    header("Location: login.php");
    exit;
}

// Check user type (for demonstration, assuming it's stored in session)
$user_type = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : '';

// Define dashboard content based on user type
if ($user_type === 'student') {
    $dashboard_content = 'Student Dashboard Content';
} elseif ($user_type === 'teacher') {
    $dashboard_content = 'Teacher Dashboard Content';
} else {
    // Handle unexpected user type
    $dashboard_content = 'Unknown User Type';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Your Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <span class="navbar-text mr-3">Welcome, <?php echo $_SESSION['username']; ?></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Dashboard Content -->
  <div class="container mt-5">
    <h2>Welcome to Your Dashboard</h2>
    <div class="card mt-3">
      <div class="card-body">
        <?php echo $dashboard_content; ?>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
