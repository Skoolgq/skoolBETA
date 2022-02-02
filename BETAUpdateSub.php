<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login.php");
    exit;
}
?><head>
  <title>Get BETA Updates</title>
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
      <button  class = "button"    onclick="location.href='login.php'">Back</button>
</div>
<hr class="gamesheader">
<iframe width="100%" height="100%" src="https://edab1b1f.sibforms.com/serve/MUIEAHL--bz182Bf58BPfILS7TInKWb-njqSSUrg9lPOwSKptVscxInB9Obr6kmxSd7fbiPEOik4PRbv1qJtRB9NAKSiBVX4AYai5R8C1BvDRbPfIewzy0TQQ-Lr2IB3wg34i2h1EBS738X062aBKFQLx_NDX39-QCq35elfrYr-E_xtP_X8EGlD4HyZI1jcQ2NC8htyZzu3lcZH" allowfullscreen frameborder="1"></iframe>
