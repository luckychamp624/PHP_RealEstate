<?php

include("connection.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $birthdate=$_POST['birthdate'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM signup WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if($num > 0){
        echo'<script>alert("Email Already Exists !")</script>';
    }
    else{
        $insert ="INSERT INTO signup(name,email,birthdate,password) VALUES('$name','$email','$birthdate','$password')";
        mysqli_query($conn,$insert);
        header("location:property.html");
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
        <h1>SIGN UP</h1>

        <form name="myform"  action="" method="POST" >
            
            <p>Full Name: *<br>
            <input type="text" name="name" placeholder="Enter your Full Name " required=""></p>

            <p>Email: *<br>
            <input type="email" name="email" placeholder="Enter your Email ID " required=""></p>

            <p>Date of Birth: *<br>
            <input type="date" name="birthdate" placeholder="dd-mm-yyyy " required=""></p>
        
            <p>Password: *<br>
            <input type="password" name="password" placeholder="Enter Password" required=""></p><br>

            <button type="submit" name="submit" value="Login">SIGNUP</button><br>
            <p>Have an account ?&nbsp;</>
            <a href="login.php">Login Here.</a>

        </form>     
    </div>  
</body>
</html>