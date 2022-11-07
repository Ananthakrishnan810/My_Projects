<!DOCTYPE html>
<html>
<head>
  <?php
    include("connect.php");
  ?>
  <style>
    body{
  font-family: Arial, Helvetica, sans-serif;
  margin:0;
}
.container {
    padding: 50px;
  background-color: white;
}
label{position:relative;left:682px;top: 58px;}
  input[type=text]{
  position: relative;
  top: 60px;
  left: 25%;
  width: 40%;
  padding: 15px;
  margin: 5px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=password]{
  position: relative;
  left: 25%;
  top: 60px;
  width: 40%;
  padding: 15px;
  margin: 5px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#sub {
  background:orange;
  color:white;
  border-style:outset;
  border-color:orange;
  height:43px;
  width:95px;
  border-radius: 12px;
  position: absolute;
  left: 950px;
  bottom: 210px;
}
#sub:hover {
  opacity: 1;
}
.sim{position: absolute;
    bottom: 200px;
    }
</style>
</head>
<body>  
   <div class="container">
    <center><h1>Admin Login</h1></center>
  <hr>
  <form method="POST">
 <label>
      Email:
   </label>
        <br>
      <center><input type="text" name="email"  placeholder="email" size="10" required autocomplete="off"/></center>
        <br>
   <label>Password:</label>
        <br>
      <center><input type="Password" placeholder="password" name="pass" required autocomplete="off"/></center>
        <br>
      <center><input type="submit" name="Submit" id="sub"></center>
    </div>
</form>
</body>
</html>
<?php
session_start();
if(isset($_POST['Submit']))
{
$email = $_POST['email'];
$password = $_POST['pass'];
if(($email=='admin')&&($password=='admin'))
{
  header("Location:adminpage.php");
}
}
?>