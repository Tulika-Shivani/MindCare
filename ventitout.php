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
    <?php include 'navCss.php' ?>
    <?php include 'ventitoutCss.php' ?>
    <title>Vent-it-Out</title>
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
            <a href="./EmotionDetect/templates/home.html">Emotion Detector</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
            <form method='post' action="">
                <input class="logout" type="submit" value="Logout" name="logout">
            </form>
        </div>
        <div class="text">
              <p class="heading" align="center"><bold>Vent It Out Wall</bold></p>
              <p align="center" class="normal">Sometimes it is necessary to let go of your emotions for the peace of mind...</p>
              <p align="center" class="normal">Together, we can make it happen!</p>
        </div>
        <div class="vent">
            <!--texbox to write your feelings-->
            <div class="textbox">
                <textarea name="paragraph_text" cols="50" rows="15"></textarea>
            </div>
            <button class="btn" align="center">Let Go</button>
        </div>
        
    </div>  
    
</body>
</html>