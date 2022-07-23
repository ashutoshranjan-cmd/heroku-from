<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$user =$_POST['username'];
$gender =$_POST['gender'];
$about =$_POST['about'];
$mobile = $_POST['mobile'];
$pass =$_POST['password'];

$servername="localhost";
$username="root";
$password="";
$dbname="form";
$captcha =$_POST['captcha'];

if($_SESSION['CODE']==$captcha){
    echo"submit<br>";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo"connection successful";
    $sql = "INSERT INTO information(Name,Email,User_Name,Password,Gender,About,Mobile) VALUES ('$name','$email','$user','$pass','$gender','$about',$mobile)";
    $result = mysqli_query($conn,$sql);
    echo$result;
    }
}
else{
    echo"please enter valid captcha code<br>";
}


?>