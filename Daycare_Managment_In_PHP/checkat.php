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
#i{
  position: relative;
  top: 20px;
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
      $sql= "select * from attendance";
      $result = mysqli_query($con,$sql);
      $count =  mysqli_num_rows($result);
      while($row = mysqli_fetch_assoc($result)) 
      {
            $array[]= $row['date'];
      }
      ?>
      <div class="mn">
      <center><select name="select" id="fc">
        <?php foreach ($array as $arr) {?>
          <center><option value="<?php print($arr); ?>" name="sel"><?php print($arr); ?></option></center>  
       <?php } ?>
      </select></center>
      <center><input type="submit" name="submit" id="sub"></center>
    </div>
</form>
<?php
   if(isset($_POST['submit']))
      {
        $at = $_POST['select'];
        $sql= "select * from attendance where date='$at'";
        $result = mysqli_query($con,$sql);
        $count =  mysqli_num_rows($result);
        while($row = mysqli_fetch_assoc($result))
        {
          $vid = $row['attendance'];
?>
       <center><iframe src="<?php echo 'img/'.$vid; ?>" width="100%" height="600px" id="i"></iframe></center> 
      

</body>
</html>
<?php
}
      }
      ?>    