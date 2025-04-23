<!DOCTYPE html>

<?php
        include("database.php");

        if(isset($_POST['Login'])){
        $email= $_POST['Email'];
        $password=$_POST['Password'];

        $sqli= mysqli_query($connect, "SELECT  `id`, `Fname`, `Lname`, `Age`, `Email`, `Password` FROM `imformation` WHERE Email= '$email' AND  Password='$password'");

        while($data= mysqli_fetch_assoc($sqli)){
            session_start();

            $_SESSION['Email']=$data["Email"];
            $_SESSION['Password']= $data["Password"];
// echo "hello";
            header("location:display.php");
        }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        background-color:whitesmoke;
    }
    .login{
        padding: 80px;
        margin: 90px;
       text-align: center;
       
    }
    .login H1{
        color: black;
    }
    #flow{
        padding: 5px;
        margin:5px;
       
    }
    #flow:hover{
        background-color:orange;
    }
    .sign {
        margin: -208px;
        margin-bottom:500px;
        margin-left:0px;
        text-align:center;
    }
    .sign button:hover{
        background-color:orange;
    }
    .button{
        padding:10px;
    }
   
</style>
<body>
        <form action="" method="post">
            <div class="login">
                <H1>REGISTERATION FORM</H1><br><br>
                <!-- <label for="">Name :</label>
                <input type="text", value="", placeholder="Enter your name "><br><br> -->

                <label for="">Email :</label>
                <input type="email" name="Email" placeholder="Enter the email"><br><br>

                <!-- <label for="">Age :</label>
                <input type="num", value=""><br><br> -->

                <label for="">Password :</label>
                <input type="password" name="Password" placeholder="Enter the password"><br><br>

                <button type="submit" id="flow" name="Login">Login</button>


               

            </div>

        </form>
        <div class="sign">
        <a href="register.php" ><button  id="flow" >Sign Up</button></a>
        </div>
                
        
        
</body>
</html>

