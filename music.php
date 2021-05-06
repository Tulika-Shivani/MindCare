<?php
  session_start();
  if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You have to log in first";
      header('location: login.php');
    }
    // logout
    if(isset($_POST['logout'])){
        session_destroy();
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lighten-Up your mood</title>
    <?php include 'navCss.php' ?>
    <?php include 'musicCss.php' ?>
</head>
<body>
    <img class="bg" src="./Assets/bg.jpg">
    <div class="content">
        <!--Nav bar-->
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="assessment.php">Self-assessment</a>
            <a href="music.php">Lighten-Up</a>
            <a href="Resources.php">Resources</a>
            <a href="ventitout.php">Vent-it-Out</a>
            <a href="contact.php">Seek Help</a>
            <a href="AboutUs.php">About Us</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
            <form method='post' action="">
                <input type="submit" value="Logout" name="logout">
            </form>
        </div>
        <div class="text">
              <p class="heading" align="center"><bold>Lighten-Up Your Mood!</bold></p>
              <br>
              <p align="center" class="normal">Have trouble concentrating? Or just need a break?</p>
              <p align="center" class="normal">Don't worry! Here we have for you the best songs to lighten up your day!</p>
        </div>
        <!--Using audio-->
        <div class="audio">
            <audio controls align="center">
                <source src="./Assets/music.ogg" type="audio/ogg">
                <source src="./Assets/music.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>  
</body>
</html>