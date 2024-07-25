<?php

$hostname="localhost";
$username="root";
$password="";
$db_name="realestate";

$conn = mysqli_connect($hostname,$username,$password,$db_name);

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];

  $sql = "SELECT * FROM contact WHERE email = '$email'";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);

  if($num > 0){
      echo'<script>alert("Email already exist.")</script>';
  }
  else{
      $insert ="INSERT INTO contact(name,email,phone,message) VALUES('$name','$email','$phone','$message')";
      mysqli_query($conn,$insert);
      echo'<script>alert("Email Send Successfully !!.")</script>';
  }
}
?>