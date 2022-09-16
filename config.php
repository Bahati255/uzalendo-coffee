<?php

$firstname=$_post['firstname'];
$lastname=$_post['lastname'];
$email=$_post['email'];
$phonenumber=$_post['phonenumber'];
$county=$_post['county'];
$password=$_post['password'];

//database connection
$conn= new mysqli('localhost','root','','signup');
if($conn->connect_error){
    die('connection failed  : '.$conn->connect_error);
}
else{

    $stmt=$conn->prepare("insert into signup(firstname,lastname,email,phonenumber,county,password)
    values(?,?,?,?,?,?,?) ") ;
    $stmt->bind_param("sssisss",$firstname,$lastname,$email,$phonenumber,$county,$password);
    $stmt->execute();
    echo"registration successfully...";
    $stmt->close();
    $conn->close();
}
?>
