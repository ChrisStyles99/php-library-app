<?php 

  session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library app</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Padauk:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/index.css">
  <script src="js/index.js" defer></script>
</head>

<body>
  <nav class="navbar">
    <h1><a href="index.php">Library</a></h1>
    <ul class="nav-list" id="nav-list">
      <?php if(isset($_SESSION['name'])): ?>
        <li class="nav-item"><a href="books.php">Books</a></li>
        <li class="nav-item"><a href="profile.php">Profile</a></li>
        <li class="nav-item"><a href="logout.php">Logout</a></li>
      <?php else: ?>
        <li class="nav-item"><a href="login.php">Login</a></li>
        <li class="nav-item"><a href="register.php">Register</a></li>
      <?php endif; ?>
    </ul>
    <i class="fas fa-bars" id="toggle-menu"></i>
  </nav>

  <svg class="wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#225763" fill-opacity="1" d="M0,288L40,266.7C80,245,160,203,240,154.7C320,107,400,53,480,32C560,11,640,21,720,53.3C800,85,880,139,960,181.3C1040,224,1120,256,1200,250.7C1280,245,1360,203,1400,181.3L1440,160L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>