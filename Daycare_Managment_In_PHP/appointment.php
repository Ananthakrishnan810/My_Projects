<!DOCTYPE html>
<html>
<head>
<?php
  include('connect.php');
  include('access.php');
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
input[type=time], select {
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
  left: 45px;
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  background-color: #00CED1;
}

input[type=submit]:hover {
  background-color: #FFA500;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
}
label{position: relative;right: -47px;}
.gif{
  position: absolute;
  bottom: 130px;
  left: 760px;
}
</style>
</head>
<body>

<h1><center><font color="#00CED1"><b>Make An Appointment</b></font></center></h1>

<div>
  <form method="POST">
    <?php
            $id=$_SESSION['id'];
            $sql= "select * from signup where  id = '$id'  ";
            $result = mysqli_query($con,$sql);
            $count =  mysqli_num_rows($result);
            while($row = mysqli_fetch_assoc($result)) 
            {?>
    <br>
    <br>
    <br>
    <br>
    <label for="lname">Date For Appointment:</label> 
    <br>
    <input type="Date" id="add" name="date">
    <br>
    <label for="lname">Time of Visit:</label>
    <br>
    <input type="time" id="phone" name="time">
    <br>
   <?php
   }
   ?>
    <input type="submit" name="Submit" value="submit">
    <div class="gif">
        <img src="img/cal.gif">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </form>
</div>

</body>
</html>
<?php
if(isset($_POST['Submit']))
{
$id = $_SESSION['id'];
$date = $_POST['date'];
$time = $_POST['time'];
$status='nothing';
$sql="insert into appointment(sid,date,time,status) values ('$id','$date','$time','$status')";
mysqli_query($con,$sql);
}
?>

