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
  width: 81.5%;
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
  width: 46%;
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
  width: 84%;
  padding: 14px;
  margin: 5px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  position: relative;
}
#cf{
  width: 82%;
  padding: 14px;
  left: 100px;
  margin: 5px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  position: relative;
}
</style>
</head>
<body>
<form method="POST">
  <div class="container">
    <h1><font color="#FFA500"> Enter The Payment </font></h1>
  <hr>
  <?php
      $sql= "select id,firstname,middlename,lastname from signup";
      $result = mysqli_query($con,$sql);
      $count =  mysqli_num_rows($result);
      while($row = mysqli_fetch_assoc($result)) 
      {
            $array[]= $row['id'];
            $array1[]= $row['firstname'].$row['middlename'].$row['lastname'];
      }
      ?>
      <div class="mn">
      <center><select name="select" id="fc">
        <?php foreach ($array as $arr) {?>
          <center><option value="<?php print($arr); ?>" name="sel"><?php print($arr); ?></option></center>  
       <?php } ?>
     </select></center>
       <center><select name="selec" id="fc">
       <?php foreach ($array1 as $arr1) {?>
          <center><option value="<?php print($arr1); ?>" name="sel"><?php print($arr1); ?></option></center>  
       <?php } ?>

      </select></center>
      <input type="text" name="tu" id="cf" placeholder="Tuition Fee">
      <input type="text" name="bu" id="cf" placeholder="Bus Fee">
      <input type="text" name="ou" id="cf" placeholder="Other Fee">
    </div>
      <div class="vv">
          <input type="submit" name="sub" id="sub">
      </div>
</form>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
  $tu = $_POST['tu'];
  $bu = $_POST['bu'];
  $ou = $_POST['ou'];
  $to = $tu+$bu+$ou;
  $se = $_POST['select'];
  $sql="insert into payment(sid,tupay,buspay,otherpay,total)values('$se','$tu','$bu','$ou','$to')";
  mysqli_query($con,$sql);
}

?>