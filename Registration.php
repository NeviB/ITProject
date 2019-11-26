<?php

require('newconfig.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
$db = new PDO($conn_string, $username, $password);


$stmt = $db->query("SELECT * from Login");
$result = $stmt->fetch();


  $User = $_POST['Rusername'];
  $Pass = $_POST['Rpassword'];
  $cPass = $_POST['ConfirmPassword'];
  
  

//seesif a username was entered
if(strlen($User) > 0 && isset($User)){
  echo "Username Entered:".$User."<br>";
} else {
  header("Location: index.html#register");
}
//Sees if you enterd a password
if(strlen($Pass) > 0 && isset($Pass)){
  echo "Password Entered:".$Pass."<br>";
} else {
  header("Location: index.html#register");
}
//sees if confirmation password was entered
if(strlen($cPass) > 0 && isset($cPass)){
  echo "Confirmation Password Entered:".$cPass."<br>";
} else {
  header("Location: index.html#register");
}

//checks if password entered and confirmation are equal
if(strlen($Pass) > 0 && $Pass == $cPass){
  $hashed = hash('sha256', $Pass);//this hashes the password so no one can see the password
  $insert_query = "INSERT INTO Login (id, username, password) VALUES (NULL, '$User', '$hashed')";
  $stmt = $db->prepare($insert_query);
  $r = $stmt->execute();
  
  //Relocates to the Registration success Page
  header("Location: indexReg.html");
  
} else {
  //If the Passwords do not match, it refreshes the register page or redirects
  header("Location: index.html#register");
}



?>