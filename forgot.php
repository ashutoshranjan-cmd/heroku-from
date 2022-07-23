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
            background: linear-gradient(to right, red,yellow);
            display: flex;
            justify-content: space-around;
        }
        form{
            margin-top: 12rem;
            display: flex;
            flex-direction: column;
            height: 15rem;
            width: 30rem;
            box-shadow: 15px 15px 25px black, -15px -15px 55px white;
            border-radius: 10px;
            justify-content: space-evenly;
            align-items: center;

        }
        input{
        width: 20rem;
        height: 2.5rem;
        padding: 10px;
        margin: 10px;
        border-radius: 10px;
        font-size: larger;
        font-weight: bolder;
        }
        #submit{
            width: 10rem;
            color: white;
            background-color: red;
            height: 3rem;
            cursor: pointer;
        }
        #submit:hover{
            background-color: blue;
        }
    </style>
</head>
<body>
    <form action="forgot_operation.php" method="post">
        <input type="tel" pattern="[0-9]{10}" placeholder="Mobile" name="mobile">
        <input type="password" placeholder="Enter new password" name="password">
        <input type="submit" id="submit">
    </form>
</body>
</html>