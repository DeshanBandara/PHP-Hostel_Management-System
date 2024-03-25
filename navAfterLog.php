<?php 
    session_start();
    #endregion$_SESSION['name'] = $name;
    #$_SESSION['regNum'] = $regNum;
    include("./dbconnect.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-----Bootstrap-->
    <link rel="stylesheet" href="./resources/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>HMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .profile-info {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        .profile-info p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php 
        if(isset($_SESSION['regNum']) && !empty($_SESSION['regNum'])) {
    ?>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SEUSL - <?php echo $_SESSION['name']; ?> -  <?php echo $_SESSION['regNum']; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">Log Out</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            
            <li class="nav-item">
            <a class="btn btn-danger" href="./logout.php">Log Out</a>
            </li>

        </ul>
        </div>
    </div>
    </nav>
    <?php
        } else {
            ?>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        Hostel management System
                    </div>

                    <ul class="nav nav-navbar navbar-right">
                        <li><a class="nav-link fw-bold" href="./login.php">Login</a></li>
                    </ul>
                </nav>
            <?php
        }
     ?>
        
