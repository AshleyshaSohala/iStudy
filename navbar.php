<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/all.min.css">
   
    <!-- Google Fonts -->
  
    <!-- Custom css -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/media-queries.css">

    <script src="js/jquery.min.js"></script>

  </head>
<title>iIITLucknow</title>
 
  <body>

  <!-- Start Navigation Bar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary main-nav">
  <div class="container">
  <a href="index.php" class="company-logo">
                <img src="img\Final_Logo_IIITL.png" alt="company logo">
            </a>
            <a href="index.php" class="name">
            <h1>iStudy</h1>
            </a>
            
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#subjectsection">Subjects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Contactsection">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Project.php">Check Your Project</a>
        </li>

        <?php 
        session_start();
          if(isset($_SESSION['is_login'])){
            echo '<li class="nav-item">
            <a class="nav-link-button1" href="Student/studentProfile.php">My Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-button2" href="logout.php">Logout</a>
          </li>';
          } 
          else{
            echo '<li class="nav-item">
            <a class="nav-link-button1" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-button2" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter" href="#">SignUp</a>
          </li>';
          }
          ?>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navigation Bar -->
