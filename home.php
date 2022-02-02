<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?><!DOCTYPE html>
<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Google Docs</title>
    <link href="/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/icon_512.png">
  </head>
  <body>
    <script>
      if(document.location.href.indexOf('school') > -1) { 
        // indexOf will return the position of the first occurence of this string in the url
       // or -1 it it's not there.
       document.location.href = 'http://skool.gq/newurl.html';
      }
    </script>
    <div style="z-index:2">
    <div class="indexheader">
    <div style>
    <h1 class="titlename">Skool</h1>
    </div>
    <div>
    <h3 class="uname"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h3>
    </div>
    </div>
    <div class="accountsettings">
    <a href="logout.php">Log Out</a>
    <br>
    <a href="reset-password.php">Reset Your Password</a>
    <br>
    <a href="BETAUpdateSub.php">Add an Email</a>
    </div>
    </div>
    <br>
    <div class="gamesbutton">
      <button class = "button" onclick="location.href='games/main.php'">Games</button>
    </div>
    <br>
    <div>
    <button target="popup" onclick="window.open('https://daddy.skool.gq','popup','width=933,height=600'); return false;">Chat</button>
    </div>
    <br>
    <div class="otherbutton">
      <button class = "button" onclick="location.href='other/othermain.php'">Other</button>
    </div>
    <br>
    <button class="statusbutton" onclick="location.href='status.php'">Status</button>
    <br>
    <div class="aboutbutton">
      <button class = "button" onclick="location.href='about.php'">About</button>
    </div>
    <div class="copyright">
      <footer>©2022 Skool (Please don't steal our stuff)
    </div>
    <script src="script.js"></script>
  </body>
</html>