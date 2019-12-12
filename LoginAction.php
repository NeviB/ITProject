
<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['loginUsername']) && $_POST['loginUsername'] != ""){
  $enteredUsername = $_POST['loginUsername'];
}
else{
  header("Location: index2.php#loginFail");
}
if(isset($_POST['loginPassword']) && $_POST['loginPassword'] != ""){
  $enteredPassword = $_POST['loginPassword'];
}
else{
  header("Location: index2.php#loginFail");
}
require('config.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
try{
  $db = new PDO($conn_string, $username, $password);
  
  $hashed = password_hash($enteredPassword, PASSWORD_DEFAULT); 
  $correct = password_verify($enteredPassword, $hashed);
  $stmt = $db->query("SELECT * FROM Accounts WHERE username = '$enteredUsername'");
  $result = $stmt->fetch();
  
 
  if($result['username'] == $enteredUsername){   
     if($correct > 0)
      {
        $_SESSION['id'] = $result['id'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['password'] = $result['password'];
      
        header("Location: Landingpage.php");
      }
      else
      {
        header("Location: index2.php#loginFail");
      }
  }
  
  
  else
  {
    header("Location: index2.php#loginFail");
  }
}  
catch (Exception $e){
  echo $e->getMessage();
  exit("Something went wrong");
}  
?>