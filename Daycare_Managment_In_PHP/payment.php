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
  bottom: 110px;
  left: 750px;
}
</style>
</head>
<body>

<h1><center><font color="#00CED1"><b>Make Payment</b></font></center></h1>

<div>
  <form method="POST">
    <?php
            $id=$_SESSION['id'];
            $sql= "select * from payment where  sid = '$id'  ";
            $result = mysqli_query($con,$sql);
            $count =  mysqli_num_rows($result);
            while($row = mysqli_fetch_assoc($result)) 
            {?>
    <br>
    <br>
    <br>
    <br>
    <label for="lname">Amount:</label> 
    <br>
    <input type="text" id="amount" name="amount" value="<?php  echo $row['total']  ?>">
    <br>
    <label for="lname">Time of Visit:</label>
    <br>
    <select name="place">
      <option>SBI</option>
      <option>Feedreal</option>
      <option>South Indian Bank</option>
      <option>Canara Bank</option>
    </select>
    <br>
    <label for="lname">Account Number:</label> 
    <br>
    <input type="text" id="add" name="date">
    <br>
   <?php
   }
   ?>
    
    <div class="gif">
        &nbsp&nbsp&nbsp&nbsp&nbsp<img src="img/pay.gif" width="59%">
    </div>
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
