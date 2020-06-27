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
        <title> CMS Tuto</title>
        
     </head>

<body>
   <div class="container">
   <link rel="stylesheet" href="../assete/style.css">
        <a href="index.php" id="logo">CMS</a><br>

<h4>Add Article</h4>

<?php  if (isset($error))  { ?>

<small style = "color:#aa0000;"><?php echo $error; ?><br><br>

<?php }?>

<form action="add.php" method="post" autocomplete="off">
 <input type="text" name='title' placeholder="title"><br><br>
 <textarea name="content" placeholder="content" cols="30" rows="10"></textarea><br><br>
 <input type="submit" value = "add article ">


</form>
 </div>
</body>
</html>