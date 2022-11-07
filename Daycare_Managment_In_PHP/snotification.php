<!DOCTYPE html>
<html>
<head>
<?php
  include('connect.php');
  include('saccess.php');
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
 textarea {
  position: relative;
  left: 45px;
  width: 50%;
  height: 240px;
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
  bottom: 105px;
  left: 820px;
}
</style>
</head>
<body>

<h1><center><font color="#00CED1"><b>Notification</b></font></center></h1>

<div>
  <form method="POST">
    <br>
    <?php
          $sql= "select sgeneral from notification";
          $result = mysqli_query($con,$sql);
          $count =  mysqli_num_rows($result);
          while($row = mysqli_fetch_assoc($result)) 
          {
                echo "<div class='gh'>";
              echo "<center><h3>".$row['sgeneral']."</h3> </center>";             
              //echo "<br>";
              echo "</div>";
              echo "<br>";
              echo "<hr>";
          }
          ?>
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


