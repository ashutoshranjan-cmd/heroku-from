<?php

$mobile = $_POST['mobile'];
$pass = $_POST['password'];

$servername="localhost";
$username="root";
$password="";
$dbname="form";

 $conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo"connection successful";
}
$sql = "SELECT * FROM information ";
$result = mysqli_query($conn,$sql);
// echo$result;

$row = mysqli_fetch_assoc($result);
if($mobile == $row['Mobile'])
{
    $sql2 = "UPDATE information SET Password ='$pass' WHERE Mobile='$mobile'";
    $result2 = mysqli_query($conn,$sql2);
}

?>