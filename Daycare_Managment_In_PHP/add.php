<!DOCTYPE html>
<html>
<head>
<?php
  include('connect.php');
  include('access.php');
  session_start();
?>
<style>
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
  bottom: 190px;
  left: 860px;
}
</style>
</head>
<body>

<h1><center><font color="#00CED1"><b>Add The Photos</b></font></center></h1>

<div>
  <form  method="POST" enctype="multipart/form-data">
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
     <br>
    <label for="fname">Select File:</label>
    <br>
    <input type="file" id="fname" name="file">
   
   <br>
   <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    <input type="submit" name='submit' value="Confirm Seat">
    <div class="gif">
        <img src="img/camera.gif" width="50%">
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
    <br>
    <br>
    <br>
    <br>
    <?php
   }
   ?>
  </form>
</div>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
//storing all necessary data into the respective variables.
$id=$_SESSION['id'];
$id = $_POST['id'];
echo $id;
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];
$image_Path = "img/".basename($file_name);
$sql="insert into image(sid,img)values('$id','$file_name')";
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
