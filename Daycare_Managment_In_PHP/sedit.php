<!DOCTYPE html>
<html>
<head>
<?php
  include('connect.php');
  include('saccess.php');
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
    <label for="fname">Firstname:</label>
    <br>
    <input type="text" name="first"  placeholder= "Firstname" size="15"  autocomplete="off"/>
    <br>
    <label for="fname">Middlename:</label>
    <br>
    <input type="text" name="mid"  placeholder= "Middlename" size="15"  autocomplete="off"/>
    <br>
    <label for="fname">Lastname:</label>
    <br>
    <input type="text" name="last"  placeholder= "Lastname" size="15"  autocomplete="off"/>
    <br>
    <label for="fname">Phone Number:</label>
    <br>
    <input type="text" name="phone"  placeholder= "Phone Number" size="15"  autocomplete="off"/>
    <br>
    <label for="fname">Email:</label>
    <br>
    <input type="text" name="email"  placeholder= "Middlename" size="15"  autocomplete="off"/>
    <br>
    <input type="submit" name='submit' value="Confirm Seat">
    <div class="gif">
      
    </div>
    <br>
    <?php
   }
   ?>
  </form>
</div>

</body>
</html>
<?php
if(isset($_POST['Submit']))
{
$id=$_SESSION['id'];
$first=$_POST['first'];
$mid=$_POST['mid'];
$last=$_POST['last'];
$phone=$_POST['phone'];
$email = $_POST['email'];
$sql= "update signup set firstname='$first' where id='$id'";
$sql1= "update signup set middlename='$mid' where id='$id'";
$sql2= "update signup set lastname='$last' where id='$id'";
$sql3= "update signup set phno='$phone' where id='$id'";
$sql4= "update signup set email='$email' where id='$id'";
$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);
$result3 = mysqli_query($con,$sql3);
$result4 = mysqli_query($con,$sql4);
if(($result>0)||($result1>0)||($result2>0)||($result3>0)||($result4>0))
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
$id=$_SESSION['id'];
          $s="select img from image where id='$id'";
          $ab=mysqli_query($con,$s);
          while ($row = mysqli_fetch_assoc($ab)) 
          {     
            echo "<img src='img/".$row['img']."' >";
          } 
}
?>