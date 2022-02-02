<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>school</title>
    <link href="/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
    <link rel="icon" href="https://i.ibb.co/0c1NfS7/163525464868080050.png">
  </head>
  <body>
    <script>
      if(document.location.href.indexOf('school') > -1) { 
        // indexOf will return the position of the first occurence of this string in the url
       // or -1 it it's not there.
       document.location.href = 'http://skool.gq/newurl.html';
      }
    </script>
    <h1>Choose your name</h1>
    <h6>Choosing one that is not yours will not work.</h6>
    <div class="list">
    <p>WillBaseball</p>
      <div class="ProLaunch">
        <button     onclick="location.href='https://promode.WillBaseball.repl.co/'">Launch</button>
      </div>
    <br>
    <p>howedooitipe</p>
      <div class="ProLaunch">
        <button     onclick="location.href='https://promode.howedooitipe.repl.co/'">Launch</button>
      </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="mainbackbutton">
      <button     onclick="location.href='index.html'">Back</button>
    </div>