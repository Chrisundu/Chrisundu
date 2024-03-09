<?php
$servername = "localhost";

$name = $_POST['name'];
$telephone= $_POST['telephone'];
$county = $_POST['nation'];
$ID = $_POST['id'];
$Email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','zula2002undu','registration');
if ($conn->connect_error){
     die('Connection Failed   :'.$conn->connect_error);}
else {$stmt = $conn->prepare("insert into reg(id,name,telephone,email,password) value(?,?,?,?,?)");
      $stmt->bind_param("ssiss",$id,$name,$telephone,$email,$password);
      echo "Registration Successfully...";
      $stmt->close();
      $conn->close();
     }





?>