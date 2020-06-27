<?php
 session_start();
   include_once('../includes/connection.php');

   

?>

<html>
    <head>
        <title> CMS Tuto</title>
        
     </head>

<body>
   <div class="container">
   <link rel="stylesheet" href="../assete/style.css">
        <a href="index.php" id="logo">CMS</a><br>
        
  <ol>
  <li><a href="add.php">add Articale</a></li>
  <li><a href="delete.php">delete Articale</a></li>
  <li><a href="logout.php">Logout</a></li>
  </ol>

 </div>
</body>
</html>

