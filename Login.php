<?php
require('newconfig.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
$db = new PDO($conn_string, $username, $password);

//Sees if username exists in the database
if($_POST['Lusername']){
  $User = $_POST['Lusername'];
}
//sees if password exists in the database
if($_POST['Lpassword']){
  $Pass = $_POST['Lpassword'];
}



echo "Entered Username:".$User."<br>";
echo "Entered Password:".$Pass."<br>";


$stmt = $db->query("SELECT * FROM Login where username = '$User'");
$result = $stmt->fetch();

echo "Database Username:".$result['username']."<br>";

$hashed = hash('sha256', $Pass);// hashes or hides the password with encryption in the database
if($result['username'] == $User && strlen($User) > 0 && $result['password'] == $hashed){
  echo "Login Succeded<br><br>";  
  header("Location: indexLogin.html");
} else {
  echo "Login Failed<br><br>";
  header("Location: index.html#Login");
}



?>