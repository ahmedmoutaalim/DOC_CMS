<?php 

// echo md5('password');
   session_start();

  include_once('../includes/connection.php');

    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] =false){


    }else{
        if (isset($_POST['username'], $_POST['password'])){
          
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            if(empty($username) or empty($password)){

                $error = 'All fields are required !';
            }else{

                $query = $pdo->prepare("SELECT * FROM users WHERE user_name = ? AND user_password = ?");
                $query -> bindValue(1, $username);
                $query -> bindValue(2, $password);

                $query->execute();

                $num = $query -> rowCount();

                if($num == 1){

                    $_SESSION['logged_in'] = true;
                    header('Location:liste.php');
                  
                    exit();
                } else {

                    $error =' Incorrect details !';
             
                }
        
            }
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
   <div class="admin">

        <a href="index.php" id="logo">CMS</a><br><br>
        
  <?php  if (isset($error))  { ?>

    <small style = "color:#aa0000;"><?php echo $error; ?><br><br>

  <?php }?>


     <form class="form-inline my-2 my-lg-0 "  action="index.php" method="post" autocomplete="off">

      <input  class="form-control mr-sm-2 "  type="text" name="username" placeholder="username"><br><br>
      <input class="form-control mr-sm-2 " type="password" name="password" placeholder="password">
      <input class="btn btn-secondary my-2 my-sm-0 "  type="submit"  value="login">

     </form>

 </div>
</body>
</html>

<?php }?>

