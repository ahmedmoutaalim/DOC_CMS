<?php
$dsn='mysql:host=localhost;dbname=cms';//datae sourse name

$user='root';

$pass='';

 try {

	$pdo = new PDO($dsn , $user , $pass);

	


 } catch ( Exception $e) {

	echo 'faild : ' . $e->getMessage();
 }




	