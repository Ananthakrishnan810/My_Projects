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
 input[type=text] {
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
  bottom: 105px;
  left: 820px;
}
 #sub{position: relative;
  top: -70px;
  left: 975px;
  width: 18%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  background-color: #00CED1;
}
#sub:hover {
  background-color: #FFA500;
}
</style>
</head>
<body>
<h1><center><font color="#00CED1"><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRequest  For  Video</b></font></center></h1>

<div>
  
  <form method="POST">
    <input type="submit" name="sub" id="sub">
    <br>
    <?php
          $id=$_SESSION['id'];
          $sql= "select video,date from video where sid='$id' and status='sented' ";
          $result = mysqli_query($con,$sql);
          $count =  mysqli_num_rows($result);
          while($row = mysqli_fetch_assoc($result)) 
          {
            $vid=$row['video'];
            $date=$row['date'];
          ?>
          <div class="ef">
            <center><input type="text" name="" value="<?php echo $date; ?>"></center>
            <br>
            <center><video width="30%" controls><source src="<?php echo 'img/'.$vid; ?>" type="video/mp4"></video></center>
          </div>
          <?php
           }
          ?>
          <hr>
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
if(isset($_POST['sub']))
{
  $id = $_SESSION['id'];
  $h = 0;
  $sql = "insert into video(sid,status)values('$id','$h')";
  $res = mysqli_query($con,$sql);
}
?>

