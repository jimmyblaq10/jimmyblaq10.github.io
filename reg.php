<?php
include 'connect.php';

if (isset( $_POST[ 'submit' ]))
{
$username = $_POST['username'];
$secret= $_POST['password'];
$email = $_POST['email'];

mysqli_query($conn, "INSERT INTO login " . "(username, secret, email) " . "VALUES
('$username', '$secret', '$email')");

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resgisteration Form</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    /*form styling begins here*/
body{
  background: rgb(214, 214, 214);
  color:rgb(10, 21, 90); 
} 
img{
  width:80px;
  height:60px;
  margin-left:140px;
  margin-top:15px;
}
h1.head{
    text-align: center;
    color:rgb(10, 21, 90);
    text-shadow:3px 3px 5px #b6a9a9;
}
form{
    width: 370px;
    height: 2000px;
    background:  rgb(214, 214, 214);
    border-radius: 10px;
    box-shadow: 5px 5px 10px #b6a9a9, -5px -5px 10px #eee;
    margin: 5% auto;
}
input.soso[type=text], input.simi[type=password], input.sisi[type=email], input[type=date]{
	  border:none;
    border-radius: 1em; 
    width: 320px;
    height: 40px;
    background:  rgb(214, 214, 214);
    outline: none;
    border-radius: 20px;
    box-shadow: 5px 5px 10px #b6a9a9, -5px -5px 10px #eee;
    margin:14px 12px;
    padding-left:1em; 
    cursor: auto; 
}
h4{
    padding-top:2em; 
    padding-left: 1em;
    color:rgb(10, 21, 90);
    text-shadow:3px 3px 5px #b6a9a9;
}

.keyword{  
    text-align: center;
    text-decoration: none; 
}
input.soso[type=text]:focus, input.simi[type=password]:focus, input.simi[type=email]:focus, input[type=date]:focus{
	border: 2px dashed grey
}
input[type=checkbox], input[type=radio]{
	width: 6%; 
	padding: 12px 28px;
	box-sizing: border-box;
	border: 2px dashed goldenrod;
  border-radius: 1em;
  box-shadow: 5px 5px 10px #b6a9a9, -5px -5px 10px #eee;
}
select{
  width: 320px;
  height: 35px;
  background:  rgb(214, 214, 214);
  outline: none;
  border-radius: 20px;
  box-shadow: 5px 5px 10px #b6a9a9, -5px -5px 10px #eee;
  margin:14px 12px;
  padding-left:1em; 
  border: none;
  cursor: pointer; 
  
}
textarea{
	width: 90%;
	height: 150px;
	padding: 12px 20px;
	margin-right: 7%;
	margin-left: 3%;
	border-radius: 1em;
  resize: none;
  border-color:rgb(10, 21, 90);
}
 input[type=submit], .tabs[type=reset]{
	width: 30%;
	padding: 16px 30px;
	margin-right: 10%;
	margin-left: 10%;
	text-decoration: none;
	margin-top: 2em;
	margin-bottom: 2em;
	cursor: pointer;
	background-color: goldenrod;
	color: whitesmoke;
	border:none;
	border-radius: 2em;
	font-size: 1.5em;
}
.tabs{
    width: 100%
}
.sub{
    float: right; 
    text-align: center;
}

.rest{
    float :left;
    text-align: center;
    padding-left:7px;
}
.tabs button{
    width: 100px;
    height: 40px;
    background:rgb(10, 21, 90);
    border:none;
    outline: none;
    border-radius: 20px;
    box-shadow: 5px 5px 10px #b6a9a9, -5px -5px 10px #eee;
    margin:30px 10px 10px 10px;
    padding-left:1em; 
    cursor: pointer;   
}
p{
  color:rgb(250, 250, 253);
  font-style: italic;
  font-weight: bolder;
}
hr{
  height: 1px;
  background-color:rgb(13, 31, 149);
}
select{
  color: rgb(13, 31, 149);
}

h5{
    text-align: left;
    margin-top: 5em;
}
h5 a{
    color: rgb(10, 21, 90);
    text-decoration:none;
    text-shadow:3px 3px 5px #b6a9a9;   
}
::-webkit-datetime-edit { padding: 1em; }
::-webkit-datetime-edit-text { color: red; padding: 0 0.3em; }
::-webkit-datetime-edit-month-field { color: blue; }
::-webkit-datetime-edit-day-field { color: green; }
::-webkit-datetime-edit-year-field { color: purple; }
::-webkit-inner-spin-button { display: none; }
fieldset{
  border-color:rgb(10, 21, 90);
}
::placeholder {
  color: rgb(0, 13, 97);
  font-family:monotype cursiva;
  font-weight:bold;
}
</style>
</head>
<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">Jimmyblaq</span> Web Design</h1>
      </div>
      <nav>
        <ul>
          <li></li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="facebook.html">Portfolio</a></li>
          <li><a href="news.html">Blog page</a></li>
          <li class="current"><a href="form.html">SignUp</a></li>
          <li><a href="loginpage.html">Login</a></li>

        </ul>
      </nav>
    </div>
  </header>

  <section id="showcase">
    <div class="container">
      <h1>Affordable Professional Web Design</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu luctus ipsum, rhoncus semper magna. Nulla nec magna sit amet sem interdum condimentum.</p>
    </div>
  </section>

  <section id="newsletter">
    <div class="container">
      <h1>Subscribe To Our Newsletter</h1>
    </div>
  </section>

    <form method="post" action="">
      <img src="./img/mylogo.png" alt="Mylogo">
        <h1 class="head">Jimmyblaq Empire Registeration Form</h1>
       <h4> Username: </h4>
     <input class="soso" type="text" placeholder="Username" name="username" id="username" > 

    <h4> Email: </h4> 
    <input class="sisi" type="email"  placeholder="Email" name="email" id="email" > 

    <h4> Password: </h4>  
    <input class="simi" type="password" placeholder="Password" name="password" id="password" > 
<br>
<br>


<div class="tabs">
  <input class="sub" type="submit" name="submit" id="submit" value="Register">
  <button class="rest" type="fixed"><p>Reset</p></button>
</div>
<br>
<br>
<br>
<div>
      <h5>
       <a href="file:///E:/Mr%20Usman's%20Assignment/loginpage.html">Login from here</a>
      </h5>
</div>            
    </form>
    <footer>
      <p><marquee>Jimmyblaq Web Deisgn, Copyright &copy; 2020</marquee></p>
    </footer> 
</body>
</html>