<?php 

session_start();
   include_once('../includes/connection.php');

if(isset($_POST['title'], $_POST['content'])){

$title = $_POST['title'];
$content= nl2br($_POST['content']);

   if(empty($title)or empty($content)){

    $error = 'All fields are required !';
   }else{
       $query = $pdo -> prepare('INSERT INTO articles (article_title , article_content , article_timestamp) VALUES(?, ?, ?) ');

       $query -> bindValue(1,$title);
       $query -> bindValue(2,$content);
       $query -> bindValue(3,time());

       $query-> execute();

       header('Location:../index.php');
   }
}

?>
<html>
    <head>
        <title> CMS </title>
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

 
   <div  class="article" >
   <link rel="stylesheet" href="../assete/style.css">
        <a href="index.php" id="logo">CMS</a><br>

<h4>Add Article</h4>

<?php  if (isset($error))  { ?>

<small style = "color:#aa0000;"><?php echo $error; ?><br><br>

<?php }?>

<form   class="form-inline my-2 my-lg-0" action="add.php" method="post" autocomplete="off">
 <input class="form-control mr-sm-2 mode" type="text" name='title' placeholder="title"><br><br>
 <textarea  class="form-control mr-sm-2 mode" name="content" placeholder="content" cols="30" rows="10"></textarea><br><br>
 <input  class="btn btn-secondary my-2 my-sm-0 mode" type="submit" value = "add article ">


</form>
 </div>
</body>
</html>
