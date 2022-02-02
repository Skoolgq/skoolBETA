<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Unblokked</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <meta http-equiv='refresh' content='1.3; URL=https://replit.com/@Forstaken/chrome'>
</head>
<body>
<h1>Loading...</h1>
<br>
<div class="loadedclickalt">
<a style="color:purple; font-size:3vw;" href="https://replit.com/@Forstaken/chrome">Not redirected? Click here.</a>
</div>
</body>