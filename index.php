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
            background:linear-gradient(to right, red, yellow);

        }
        form{
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
            margin-top: 15rem;
            height: 18rem;
            width: 30rem;
            box-shadow: 15px 15px 25px black, -15px -15px 55px white;
            border-radius: 15px ;


        }
        .details{
            height: 3rem;
            width: 25rem;
            border: 2px solid black;
            border-radius: 5px;
            padding:10px;
            font-size: larger;
            font-weight: bolder;
        }
        .button{
            width: 25rem;
            height: 3rem;
            display: flex;
            justify-content: space-around;
        }
        #sbt{
            color: white;
            background-color: red;
            width: 10rem;
            font-size: larger;
            font-weight: bolder;
            border-radius: 5px;
            cursor:pointer;
        }
        #btn{
            color: white;
            background-color: red;
            width: 10rem;
            font-size: larger;
            font-weight: bolder;
            border-radius: 5px;
            cursor:pointer;
        }
        a{
            color:white;
            text-decoration:none;

        }
        #sbt:hover{
            background-color:blue;
        }
        #btn:hover{
            background-color:blue
        }
        #forgot{
            color:white;
            font-size:larger;
            font-weight:bolder;
        }
        #forgot:hover{
            color:blue;
        }
    </style>
</head>
<body>
    <form action="table.php" method="post">
        <input  class="details" type="text" name="userName" placeholder="User Name" required>
        <input class="details"  type="password" name="password" placeholder="Password" required>
        <div class="button">
        <input type="submit" id="sbt" value="SUBMIT">
        <button id="btn"  ><a href="form.php">REGISTER</a></button>
    </div>
    <a id="forgot" href="forgot.php">Forgot Password</a>
    </form>
</body>
</html>