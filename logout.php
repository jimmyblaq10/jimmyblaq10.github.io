<?php
    session_start(); 
unset($_SESSION['login_user']);
unset($_SESSION['password']);

header("Location: loginpage.html");
  
?>
