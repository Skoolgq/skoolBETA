CURRENTLY DEFUNCT
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>school</title>
  <link href="/style.css" rel="stylesheet" type="text/css" />
  <meta http-equiv='refresh' content='0.1; URL=https://forms.gle/B1UofW7WbxrNsonH8'>
</head>
<body>
  <script>
      if(document.location.href.indexOf('school') > -1) { 
        // indexOf will return the position of the first occurence of this string in the url
       // or -1 it it's not there.
       document.location.href = 'http://skool.gq/newurl.html';
      }
    </script>
  <h3>To get pro, just email "I want pro" to dbjones3@students.wcpss.net</h3>
  <br>
  <br>
  <br>
  <div class="mainbackbutton">
  <button class = "button" onclick="location.href='index.html'">Back</button>
  </div>
</body>
</html>