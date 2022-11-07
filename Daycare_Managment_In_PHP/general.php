<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
  <?php
    include("connect.php");
    session_start();
    include("accessin.php");
  ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family: Arial, Helvetica, sans-serif;
  margin:0;
}
.container {
    padding: 50px;
  background-color: white;
}
label{position:relative;left:365px;}

textarea{
  width: 80%;
  height: 240px;
  padding: 15px;
  margin: 10px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  position:relative;
  left:100px;
}
#select{
  position:relative;
  left:365px;
  width: 42.5%;
  padding: 15px;
  margin: 5px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
#sub {
  position:relative;
  top:40px;
  left: 100px;
  background:#FFA500;
  color:white;
  border-style:outset;
  border-color:#FFA500;
  height:43px;
  width:84%;
}
#sub:hover {
  background-color: #00CED1;
  border-color:#00CED1;
}
#fc{
  width: 20%;
  padding: 14px;
  margin: 5px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
</style>
</head>
<body>

<form method="POST">
  <div class="container">
    <h1><font color="#FFA500"> Enter The Notifications </font></h1>
  <hr>
<div class="vv">
        <textarea name="not">Enter Your notification</textarea>
        <input type="submit" name="sub" id="sub">
</div>
</form>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
  $not=$_POST['not'];
  $sql="update notification set general='$not'";
  mysqli_query($con,$sql);
}