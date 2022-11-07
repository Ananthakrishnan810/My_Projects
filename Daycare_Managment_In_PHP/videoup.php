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
  top:0px;
  background:orange;
  color:white;
  border-style:outset;
  border-color:#FFA500;
  height:43px;
  width:80%;
}
#sub:hover {
  background-color: #00CED1;
  border-color:#00CED1;
}
#date{
  position: relative;
  left: -3px;
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
#fc{position: relative;
  left: -3px;
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
#file{

  position: relative;
  left: -3px;
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1><font color="#FFA500"> Enter The Notifications</font> </h1>
  <hr>
  <center><input type="hidden" value="sented" name="hid"></center>
  <?php
      $sql= "select sid,firstname,middlename,lastname from video,signup where status = '0' and video.sid = signup.id ";
      $result = mysqli_query($con,$sql);
      $count =  mysqli_num_rows($result);
      while($row = mysqli_fetch_assoc($result)) 
      {
            $array[]= $row['sid'];
            $array1[]= $row['firstname'].$row['middlename'].$row['lastname'];
      }
      ?>
      <div class="mn">
      <center><select name="select" id="fc">
        <?php foreach ($array as $arr) {?>
          <center><option value="<?php print($arr); ?>" name="sel"><?php print($arr); ?></option></center>  
       <?php } ?>
      </select></center>
      <center><select name="select" id="fc">
        <?php foreach ($array1 as $arr1) {?>
          <center><option value="<?php print($arr1); ?>" name="sel"><?php print($arr1); ?></option></center>  
       <?php } ?>
      </select></center>
    </div>
      <center><input type="file" id="file" name="file"></center>
      <center><input type="Date" id="date" name="date"></center>
      <center><input type="submit" id="sub" name="submit"></center>
</form>
</body>
</html>
<?php
   if(isset($_POST['submit']))
      {
        $id=$_POST['select'];
        $date=$_POST['date'];
        $status =$_POST['hid'];
        $name=$_FILES['file']['name'];
        $temp=$_FILES['file']['tmp_name'];
        move_uploaded_file($temp,"img/".$name);
        $sql="update video set video='$name',date='$date',status='$status' where sid='$id'";
        mysqli_query($con,$sql);
      }
      ?>
    