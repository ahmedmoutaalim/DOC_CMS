

<?php

include_once('includes/connection.php');
include_once('includes/article.php');
include_once('includes/suggest.php');

$article = new Article;
$articles = $article ->fetch_all();

$suggest = new suggest;
 $sug = $suggest -> call_all();
 


 if(isset($_POST['name'],$_POST['suggest'])){

   $name = $_POST['name'];
   $content = nl2br($_POST['suggest']);

   if(empty($name) or empty($content)){

      $error = 'All fields are required !';
   }else{


      $query = $pdo -> prepare('INSERT INTO suggest (suggest_name , suggest_content , suggest_timestamp) VALUES(?, ?, ?) ');

      $query -> bindValue(1,$name);
      $query -> bindValue(2,$content);
      $query -> bindValue(3,time());

      $query-> execute();

   }



 }


?>

<html>
    <head>
        <title> CMS </title>
        <link rel="stylesheet" href="assete/style.css">
     </head>


     <body>

<div class="flex">

   <div class="container" >

        <a href="index.php" id="logo">CMS</a>
        

       <ol>

       <?php foreach ($articles as $article) { ?>

          <li>
          <a href="article.php?id=<?php echo $article['article_id'] ;?>">
             <?php echo $article['article_title'] ; ?>
            </a>
           - <small>
             posted <?php  echo date('l jS', $article['article_timestamp']); ?>
             </small>
          </li>
       <?php  } ?>   
       </ol>

       <small>
         <a href="admin">admin</a><br><br>
       </small>
       
   </div>

   <div class="suggest">


   <a href="suggest.php">suggest</a><br><br>

   
<?php  if (isset($error))  { ?>

<small style = "color:#aa0000;"><?php echo $error; ?><br><br>

<?php }?>

   <form action="index.php" method="post" autocomplete="off">
   <input type="text" placeholder="name" name="name"><br><br>
   <textarea name="suggest"  placeholder="suggest" cols="30" rows="10"></textarea><br><br>
   <a href="#"><input type="submit" value="envoyer"></a>
    
    <form>
   </div>
</div>  
  
  

       
     </body>
</html>