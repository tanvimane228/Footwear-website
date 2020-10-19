<?php

$db_host="localhost";
$db_username="username";
$db_password="password";
$db_database="footwear";

$conn= new mysqli($db_host,$db_username,$db_password,$db_database);

if ($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}

if(isset($_POST['username'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="insert into registration(NAME,EMAIL,PASSWORD) values('$username','$email','$password')";
    if($conn->query($sql)){
     header("Location:contactus.html");
    }else{
        die("signup failed");
    }
}
?>