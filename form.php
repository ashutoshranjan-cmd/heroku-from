<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body{
        display: flex;
        align-items: center;
        justify-content: space-around;
        background: linear-gradient( to right,red, yellow);
      }
      form {
        margin-top: 1rem;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        height: 42rem;
        width: 30rem;
        /* border: 5px solid black; */
        box-shadow: 15px 15px 25px black, -15px -15px 55px white;
        border-radius: 15px;
        position:inherit;
      }
      #name{
        height: 2rem;
        width: 20rem;
        border: 2px solid black;
        border-radius: 5px;
        padding: 5px;
        font-size: large;
        font-weight: bolder;
        
      }
      #email{
        height: 2rem;
        width: 20rem;
        border: 2px solid black;
        border-radius: 5px;
        padding: 5px;
        font-size: large;
        font-weight: bold;
      }
      #username{
        height: 2rem;
        width: 20rem;
        border: 2px solid black;
        border-radius: 5px;
        padding: 5px;
        font-size: large;
        font-weight: bold;
      }
      .Gender{
        font-size: larger;
        font-weight: bold;
        width: 20rem;
        height: 2rem;
        display: flex;
        justify-content: space-around;
        align-items: center;
       
      }
      .gender{
        cursor: pointer;
      }
      textarea{
        border: 2px solid black;
        width: 20rem;
        height:5rem;
        border-radius: 5px;
        padding: 5px;
        font-size: larger;
        font-weight: bolder;
        resize: none;
      }
      #submit{
        height: 2.5rem;
        width: 10rem;
        border: 5px solid white;
        border-radius: 15px;
        color: white;
        font-size: large;
        font-weight: bolder;
        background-color: red;
        cursor: pointer;
      }
      #submit:hover{
        background-color: blue;
      }
      #captcha{
        width:8rem;
        height:3rem;

      }
      img{
        width:8rem;
        height:3rem;

        border:2px solid black;
        border-radius:5px;
      }
      button{
        width:2rem;
        height: 2rem;
        border:2px solid black;
        color:white;
        font-weight:bolder;
        background-color:green;
        border-radius:10px;
        cursor:pointer;
      }
      .captcha{
        display:flex;
        width:20rem;
        justify-content:space-around;
      }
      #mobile{
        height: 2rem;
        width: 20rem;
        border: 2px solid black;
        border-radius: 5px;
        padding: 5px;
        font-size: large;
        font-weight: bold;
      }
      #password{
        height: 2rem;
        width: 20rem;
        border: 2px solid black;
        border-radius: 5px;
        padding: 5px;
        font-size: large;
        font-weight: bold;
      }

   
    </style>
  </head>
  <body>
    <form id="frmCaptcha" action="operation.php" method="post">
      <input id="name" type="text" name="name" placeholder="Name" />
      <input id="mobile" type="tel" name="mobile" placeholder="mobile" pattern="[0-9]{10}"/>
      <input id="email" type="email" name="email" placeholder="Email" />
      <input id="username" type="text" name="username" placeholder="User Name" />
      <input id="password" type="password" name="password" placeholder="Password" />
      <input id="password" type="password" name="confirm_password" placeholder=" Confirm Password" />
      <div class="Gender">
        <label for="">Gender</label>
        <input class="gender" type="radio" name="gender" value="male" checked/>
        <label for="">Male</label>
        <input class="gender" type="radio" name="gender" value="female"/>
        <label for="">Female</label>
        <input class="gender" type="radio" name="gender" value="other" />
        <label for="">Others</label>
      </div>
      <textarea
        id="about"
        name="about"
        id=""
        cols="30"
        rows="10"
        placeholder="About your self"
      ></textarea>
      <h4>Enter captcha</h4>
      <div class="captcha" id="box">
        <img id="img" src="cap.php" alt="">
        <textarea name="captcha" id="captcha" cols="10" rows="1"></textarea>
        <button onclick="reload()">&#8634;</button>
      </div>
      <input type="submit" id="submit" onclick="submit_data()" />
    </form>
  </body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
      function reload(){
        document.getElementById("box").innerHTML = document.getElementById("box").innerHTML ;
      }
      function submit_data(){
        jQuery.ajax({
          url:'operation.php',
          type:'post',
          data:jQuery('#frmCaptcha').serialize();
          success:function(data){
            alert(data);
          }
        });
      }
    </script>
</html>
