<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            background: linear-gradient(to right, red , yellow);
        }
        tr{
            border: 2px solid black;
        }
        table{
            height: 35rem;
            width: 25rem;
            margin-top: 5rem;
            border-radius: 10px;
            padding: 2rem;
            font-size: larger;
            font-weight: bolder;
            box-shadow: 15px 15px 25px black, -15px -15px 55px white;  
            color:white;
              }
    </style>
</head>
<body>
<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="form";

$name = $_POST['userName'];
$pass =$_POST['password'];

$conn = mysqli_connect($servername,$username,$password,$dbname);
// if($conn )
// {
    // echo"Connection successful";


$sql = "SELECT * FROM information WHERE User_Name='$name'";
$result = mysqli_query($conn,$sql);
// while($row = mysqli_fetch_assoc($result))
// {
//     echo"name :{$row['Name']}<br>";
// }
// while( $row =mysqli_fetch_assoc($result))
// {
 $row = mysqli_fetch_assoc($result);
if($pass == $row['Password'] && $pass == $row['Password'] )
{



?>
    <table >
        <tr>
            <td>Name</td>
            <td>:&nbsp</td>
            <td><?php echo$row['Name']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:&nbsp</td>
            <td><?php echo$row['Email']?></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td>:&nbsp</td>
            <td><?php echo$row['Mobile']?></td>
        </tr>
        <tr>
            <td>User Name</td>
            <td>:&nbsp</td>
            <td><?php echo$row['User_Name']?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:&nbsp</td>
            <td><?php echo$row['Gender']?></td>
        </tr>
        <tr>
            <td>About</td>
            <td>:&nbsp</td>
            <td><?php echo$row['About']?></td>
        </tr>
    </table>

<?php }
else if($name != $row['User_Name']){
    ?>
 
  <script>
    alert('user name not found');
  </script>

  <?php } ?>

</body>
</html>