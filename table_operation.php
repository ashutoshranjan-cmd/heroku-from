<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="form";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo"Connection successful";
}
$sql = "SELECT * FROM information WHERE Name='ashutosh'";
$result = mysqli_query($conn,$sql);
// while($row = mysqli_fetch_assoc($result))
// {
//     echo"name :{$row['Name']}<br>";
// }
$row = mysqli_fetch_assoc($result);


?>