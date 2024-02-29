<?php
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   //Database Connection
   $conn = new mysqli('localhost','root','','test1');
   if ($conn->connect_error) {
   	die('Connection Failed = '.$conn->connect_error);
   }
   else{
   	$stmt = $conn->prepare("insert into registration(username, email, password) values(?, ?, ?)");
   	$stmt->bind_param("sss",$username, $email, $password);
   	$stmt->execute();
   	$conn->close();
   	$stmt->close();
   }
   header("Location: patientlogin.html");
   
?>