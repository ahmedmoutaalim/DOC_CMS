<?php 

include_once('includes/connection.php');
include_once('includes/article.php');


$article = new Article;

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $data =$article -> fetch_data($id);


?>


<html>
    <head>
        <title> CMS Tuto</title>
        <link rel="stylesheet" href="assete/style.css">
        <link rel="stylesheet" type="text/css" href="assete/bootswatch.css">
     </head>


     <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     
     <img class="size"src="img/summer.png" alt="icon">
     
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
   <div class="article" >

        <a href="index.php" id="logo">CMS</a>
        

       <h4><?php echo $data['article_title'] ?> -
       <small>
       posted <?php echo date('l jS' , $data['article_timestamp']);?>
       </small>
       </h4>

       <p class="text"><?php echo $data['article_content']; ?></p>
       <a href="index.php">&larr; Back</a>
   </div>

     
     </body>
</html>







<?php
} else {

    header('Location: index.php');
    exit();
}

?>