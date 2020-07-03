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

   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     
     <img class="size"src="../img/summer.png" alt="icon">
     
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
 
   <div class="collapse navbar-collapse" id="navbarColor02">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
         <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">Features</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">Pricing</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">About</a>
       </li>
     </ul>
     <form class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2" type="text" placeholder="Search">
       <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
     </form>
   </div>
 </nav>
   <div class="operation">
  
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
     <small style="color:green;" >
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

