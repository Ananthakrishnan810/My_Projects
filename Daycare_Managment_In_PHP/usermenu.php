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

<h1><center><font color="#FFA500"><b>User Panel</b></font></center></h1>

<div>
  <form method="POST">
    <br>
    <br>
    <br>
    <br> 
    <br>
    <br>
    <input type="submit" name="sub" value="Check Bus Service ">
    <input type="submit" name="su" value="Check Appointment" height="50%">
    <input type="submit" name="s" value="Notifications To Specific User" height="50%">
    <input type="submit" name="dub" value="General Notification" height="50%">
    <input type="submit" name="cub" value="Video Upload" height="50%">
    <input type="submit" name="fub" value="Add Payment" height="50%">
    <input type="submit" name="eub" value="Check User Feedback" height="50%">
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
  header("Location:approve.php");
}
if(isset($_POST['su']))
{
  header("Location:checkap.php");
}
if(isset($_POST['s']))
{
  header("Location:adminsel.php");
}
if(isset($_POST['dub']))
{
  header("Location:general.php");
}
if(isset($_POST['cub']))
{
  header("Location:videoup.php");
}
if(isset($_POST['eub']))
{
  header("Location:userfeed.php");
}
if(isset($_POST['fub']))
{
  header("Location:addpay.php");
}
?>

