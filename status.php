<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<head> 
  <title>School Games Status</title>
  <link href="/style.css" rel="stylesheet" type="text/css" />
</head>
<script>
      if(document.location.href.indexOf('school') > -1) { 
        // indexOf will return the position of the first occurence of this string in the url
       // or -1 it it's not there.
       document.location.href = 'http://skool.gq/newurl.html';
      }
    </script>
<div class="gamesbackbutton">
      <button class="button" onclick="location.href='home.php'">Back</button>
</div>
<hr>
<iframe width="100%" height="86%" src="https://2dv9m6nj.status.cron-job.org/" allowfullscreen frameborder="0"></iframe>