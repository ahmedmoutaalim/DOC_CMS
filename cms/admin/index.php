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
   <div class="container">

        <a href="index.php" id="logo">CMS</a><br><br>
        
  <?php  if (isset($error))  { ?>

    <small style = "color:#aa0000;"><?php echo $error; ?><br><br>

  <?php }?>


     <form action="index.php" method="post" autocomplete="off">

      <input  type="text" name="username" placeholder="username">
      <input type="password" name="password" placeholder="password">
      <input type="submit"  value="login">

     </form>

 </div>
</body>
</html>

<?php }?>

