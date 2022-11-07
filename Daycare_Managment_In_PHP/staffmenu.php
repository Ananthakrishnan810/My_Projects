<!DOCTYPE html>
<html>
<head>
<?php
  include('connect.php');
  include('accessin.php');
  session_start();
?>
<style>
input[type=Date], select {
  position: relative;
  left: 45px;
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  position: relative;
  left: 118px;
  width: 25%;
  background-color: #4CAF50;
  color: white;
  padding: 65px 20px;
  margin: 8px 0;
  margin-left: 19px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  background-color: #FFA500;
}

input[type=submit]:hover {
  background-color: #00CED1;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
}
label{position: relative;right: -47px;}
.gif{
  position: absolute;
  bottom: 105px;
  left: 820px;
}
</style>
</head>
<body>

<h1><center><font color="#FFA500"><b>Staff Panel</b></font></center></h1>

<div>
  <form method="POST">
    <br>
    <br>
    <br>
    <br> 
    <br>
    <br>
    <input type="submit" name="sub" value="taff notifications ">
    <input type="submit" name="su" value="check Attendance" height="50%">
    <input type="submit" name="s" value="Check entry and going" height="50%">
    <input type="submit" name="dub" value="staff feedback" height="50%">
    <br>
    <br>
    <br>
    <br>
  </form>
</div>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
  header("Location:sgeneral.php");
}
if(isset($_POST['su']))
{
  header("Location:checkat.php");
}
if(isset($_POST['s']))
{
  header("Location:checkeo.php");
}
if(isset($_POST['dub']))
{
  header("Location:stafffeed.php");
}
?>

