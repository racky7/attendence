<?php 
//This includes the session file. This file contains code that starts/resumes a session. 
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
include_once 'includes/session.php'?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <link href="css/site.css" rel="stylesheet" >

    <title>Attendence - <?php echo $title; ?></title>
  </head>
  
  <body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">RackyWeb</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="viewrecords.php">View Records</a>

      </div>
      <div class="navbar-nav mr-auto">
        <?php
          if(!isset($_SESSION['userid'])){

        ?>
        <a class="nav-link active" aria-current="page" href="login.php">Login</a>

        <?php } else {?>
          <a class="nav-link active" aria-current="page" href="#">Hello <?php echo $_SESSION['username'] ?></a>
          <a class="nav-link active" aria-current="page" href="logout.php">Log Out</a>

        <?php } ?>
        

      </div>
    </div>
  </div>
</nav>
<br/>