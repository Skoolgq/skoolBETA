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
    <title>Unblokked</title>
    <link href="/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
    <link rel="icon" href="https://i.ibb.co/0c1NfS7/163525464868080050.png">
  </head>
<body>
  <h1>Hey! We moved our domain to...</h1>
  <div class="youtubelink">
    <a href="https://skool.gq">skool.gq</a>
  </div>
  <br>
  <br>
  <br>