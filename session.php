<?php
session_start();
include 'connect.php';
   
   $user_check = $_SESSION['login_user'];
  
   $result = mysqli_query($conn, "select * from login  where ID = '$user_check' ");


$result16 = mysqli_fetch_array($result);
 
$login_session = $result16['ID'];
$_SESSION['ID'] = $result16['ID'];
   
  

if(!isset($_SESSION['login_user'])){
      header("location:loginpage.html");
   }
?>
