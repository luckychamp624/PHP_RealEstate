<?php

$hostname="localhost";
$username="root";
$password="";
$db_name="realestate";

$conn = mysqli_connect($hostname,$username,$password,$db_name);

if(isset($_POST['submit'])){
  $subscribe=$_POST['subscribe'];


  $sql = "SELECT * FROM emailid WHERE subscribe = '$subscribe'";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);

  if($num > 0){
      echo'<script>alert("Email already exist.")</script>';
  }
  else{
      $insert ="INSERT INTO emailid(subscribe) VALUES('$subscribe')";
      mysqli_query($conn,$insert);
      echo'<script>alert("Email Send Successfully !!.")</script>';
  }
}
?>