<?php
 session_start();
   include_once('../includes/connection.php');
  
   include_once('../includes/suggest.php');
   
   $suggest = new suggest;
   $sug = $suggest -> call_all();
   

?>

<html>
    <head>
        <title> CMS Tuto</title>
        <link rel="stylesheet" href="../assete/style.css">
     </head>

<body>
   <div class="container">
  
        <a href="index.php" id="logo">CMS</a><br>
        
  <ol>
  <li><a href="add.php">add Articale</a></li>
  <li><a href="delete.php">delete Articale</a></li>
  <li><a href="logout.php">Logout</a></li>
  </ol>

  <ol>

  <a class="right" href="#">visitors suggests</a>
  
<?php foreach ($sug as $suggest) { ?>

   <li>
   <p href="suggest.php?id=<?php echo $suggest['suggest_id'] ;?>">
      <?php echo $suggest['suggest_name'] ; ?>
     </p>
    - <small >
      posted <?php  echo date('l jS', $suggest['suggest_timestamp']); ?>
      </small>

      <p><?php echo $suggest['suggest_content']; ?></p>
      
   </li>
<?php  } ?>   
</ol> 


 </div>
</body>
</html>

