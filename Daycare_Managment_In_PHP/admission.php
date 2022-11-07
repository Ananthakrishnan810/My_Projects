<!DOCTYPE html>
<html>
<head>
<?php
  include('connect.php');
  include('access.php');
  session_start();
?>
<style>
input[type=text], select {
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

<h1><center><font color="#00CED1"><b>Take An Admission</b></font></center></h1>

<div>
  <form method="POST">
    <?php
            $id=$_SESSION['id'];
            $sql= "select * from signup where  id = '$id'  ";
            $result = mysqli_query($con,$sql);
            $count =  mysqli_num_rows($result);
            while($row = mysqli_fetch_assoc($result)) 
            {?>
     
    <label for="fname">First Name:</label>
    <br>
    <input type="text" id="fname" name="firstname" value="<?php echo $row['firstname']; ?>">
    <br>
    <label for="lname">Middle Name:</label>
    <br>
    <input type="text" id="mname" name="middlename" value="<?php echo $row['middlename']; ?>">
    <br>
    <label for="lname">Last Name:</label>
    <br>
    <input type="text" id="lname" name="lastname" value="<?php echo $row['lastname']; ?>">
    <br>
    <label for="lname">Father Name:</label>
    <br>
    <input type="text" id="fname" name="fathername" value="<?php echo $row['fathername']; ?>">
    <br>
    <label for="lname">Mother Name:</label>
    <br>
    <input type="text" id="mname" name="mothername" value="<?php echo $row['mothername']; ?>">
    <br>
    <label for="lname">Address:</label>
    <br>
    <input type="text" id="add" name="address" value="<?php echo $row['addres']; ?>">
    <br>
    <label for="lname">Phone:</label>
    <br>
    <input type="text" id="phone" name="phone" value="<?php echo $row['phno']; ?>">
   <?php
   }
   ?>
    <input type="submit" name="submit" value="Confirm Seat">
    <div class="gif">
        <img src="img/ad.gif">
    </div>
  </form>
</div>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $id=$_SESSION['id'];
  $sql = "insert into admission(sid)values('$id')";
  $l = mysqli_query($con,$sql);
}
?>

