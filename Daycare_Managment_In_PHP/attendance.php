<html>
<head>
  <?php
    include('connect.php');
    include('saccess.php');
    session_start();
  ?>
  <style type="text/css">
    input[type=file], select {
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
  input[type=Date] {
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
label{position: relative;right: -386px;}
  </style>
</head>
<body> 
  <h1><center><font color="#00CED1"><b>Add Attendance</b></font></center></h1>
  <div>
   <form method="POST" enctype="multipart/form-data">
      <?php
            $id=$_SESSION['id'];
            $sql= "select * from staffsignup where  id = '$id'  ";
            $result = mysqli_query($con,$sql);
            $count =  mysqli_num_rows($result);
            while($row = mysqli_fetch_assoc($result)) 
            {?>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>   
          <center><input type="hidden"  name="id" value="<?php echo $row['id'] ?>" required autocomplete="off"/></center>
          <label><b>Enter Date:</font></b>:</label>
          <br>
          <center><input type="Date" name="date"></center>
          <br>
          <label><b>Enter Attendance:</font></b>:</label>
          <br>
          <center><input type="file" name="file"  placeholder= "" size="15"  autocomplete="off"/></center>
          <center><input type="submit" name="submit" id="sub"></center>
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
          <?php
            }
          ?>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
//storing all necessary data into the respective variables.
$id=$_SESSION['id'];
$id = $_POST['id'];
$date = $_POST['date'];
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];
$image_Path = "img/".basename($file_name);
$sql="insert into attendance(ssid,date,attendance)values('$id','$date','$file_name')";
mysqli_query($con,$sql);
if (move_uploaded_file($file_path, $image_Path))
{
  echo "<script type='text/javascript'>";
  echo "alert('Update successfully')";
  echo "</script>"; 
}
else
{
  echo "<script type='text/javascript'>";
  echo "alert('Please try again')";
  echo "</script>"; 
  
}
}  
?>
