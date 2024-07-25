<?php

include("connection.php");

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM signup WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if($num > 0){
        header("location:property.html");
    }
    else{
        echo'<script>alert("OOPS !!! Email id or password is not matching .\n Please Try Again ...")</script>';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
<div class="main">
        <h1>LOGIN</h1>

        <form name="myform"  action="" method="POST" >

            <p>Email<br>
            <input type="email" name="email" placeholder="Enter your Email ID " required=""><br></p>

            <p>Password<br>
            <input type="password" name="password" placeholder="Enter Password" required=""><br></p>

            <button type="submit" name="submit" value="Login">LOGIN</button><br><br>
            <p>Don't have an account ?&nbsp;</p>
            <a href="signup.php">Signup Here.</a>

        </form>     
    </div>  
</body>
</html>