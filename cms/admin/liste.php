<?php
 session_start();
   include_once('../includes/connection.php');
  
   include_once('../includes/suggest.php');
   
   $suggest = new suggest;
   
   $sug = $suggest -> call_all();

   if(isset($_GET['delete'])){
      $id = $_GET['delete'];

      $query = $pdo -> prepare("DELETE FROM suggest WHERE suggest_id = '$id' ");
      $query ->bindValue(1 , $id);
      $query -> execute();


   }

   

 

?>

<html>
    <head>
        <title> CMS Tuto</title>
        <link rel="stylesheet" href="../assete/style.css">
        <link rel="stylesheet" type="text/css" href="../assete/bootswatch.css">
     </head>

<body>
   <div class="container">
  
        <a href="index.php" id="logo">CMS</a><br>
        
  <ol>
  <li><a href="add.php">add Articale</a></li>
  <li><a href="delete.php">delete Articale</a></li>
  <li><a href="logout.php">Logout</a></li>
  </ol>


  <a class="show" href="#">visitors suggests</a>

  <ol class="hide">

<?php foreach ($sug as $suggest) { ?>
 
   <li class="lign">
   <p href="suggest.php?id=<?php echo $suggest['suggest_id'] ;?>">
      <?php echo $suggest['suggest_name'] ; ?>
     </p>
    - <small >
      posted <?php  echo date('l jS', $suggest['suggest_timestamp']); ?>
      </small>

      <p><?php echo $suggest['suggest_content']; ?></p>

  
    <a href="liste.php?delete=<?php echo $suggest['suggest_id']; ?>">delete</a>
  
    
   

      
   </li>
<?php  } ?>   
</ol> 


 </div>
</body>

<script src="main.js"></script>
</html>

