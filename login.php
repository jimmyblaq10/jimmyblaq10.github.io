<?php
session_start();
include 'connect.php';

if (isset( $_POST[ 'submit' ]))
{
$username = $_POST['username'];
$secret= $_POST['password'];
$email = $_POST['email'];

$result = mysqli_query($conn, "select * from login WHERE username like '$username' AND email = '$email' AND secret ='$secret'");
 $result16 = mysqli_fetch_array($result);
 
 if($result16 != 0) {

$_SESSION["login_user"]= $result16['ID'];
    
echo " <script language='javascript' type='text/javascript'> location.href='portal.php' </script>" ;

    //here session is used and val
}
else
{
echo "<script type='text/javascript'>alert('Invalid Credentials!!!!!')</script>" ;
echo " <script language='javascript' type='text/javascript'> location.href='loginpage.html' </script>" ;
}
}
?>