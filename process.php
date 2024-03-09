<?php
$serverName = "local instance MySQL";
$id = "id";
$name = "name";
$telephone = "telephone";
$email = "email";
$password = "password";
$dbname = "registration";

$conn = new mysqli($serverName,$id,$name,$telephone,$email,$password,$dbname);

if ($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
    }

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $id = $_POST['id'];
   $name = $_POST['name'];
   $telephone = $_POST['email'];
   $password = $_POST['password'];
   $telephone = $_POST['telephone'];

   $sql = "INSERT INTO users (id,name,telephone,email,password) VALUES('$id','$name','$telephone','$email','$password')";

   if ($conn->query($sql) === TRUE){
       echo "Registration successful";
     }else{
          echo "Error" .$sql . "<br>" . $conn->error;
     }

 }
$conn->close();
?>