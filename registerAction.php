<?php
if(isset($_POST['registerUsername']) && $_POST['registerUsername'] != ""){
  $registerUsername = $_POST['registerUsername'];
}
else{
  header("Location: index2.php#registerFail");
}
if(isset($_POST['registerPassword']) && $_POST['registerPassword'] != ""){
  $registerPassword = $_POST['registerPassword'];
}
else{
  header("Location: index2.php#registerFail");
}
if(isset($_POST['registerPasswordConfirm']) && $_POST['registerPasswordConfirm'] != ""){
  $registerPasswordConfirm = $_POST['registerPasswordConfirm'];
}
else{
  header("Location: index2.php#registerFail");
}
require('newconfig.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
try{
  $db = new PDO($conn_string, $username, $password);
  
  $hashed = password_hash($registerPassword, PASSWORD_DEFAULT); 
  if($registerPasswordConfirm && $registerPasswordConfirm){
    $insert_query = "INSERT INTO Accounts (id, username, password) VALUES (NULL, '$registerUsername', '$hashed');";
  }
  $stmt = $db->prepare($insert_query); 
  print_r($stmt->errorInfo());
  $r = $stmt->execute();
  
   if($r > 0){
      header("Location: index2.php#registerSuccess");      
    }
    else
    {
      header("Location: index2.php#registerFail");
    }
}  
catch (Exception $e){
  echo $e->getMessage();
  exit("Something went wrong");
}  
?>