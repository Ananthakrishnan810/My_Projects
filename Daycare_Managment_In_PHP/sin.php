<?php
include("connect.php");
session_start();
if(isset($_POST['Submit']))
{
$email = $_POST['email'];
$password = $_POST['pass'];
$code = $_POST['otp'];
$sql= "select * from signup where  email = '$email' and password = '$password' ";
$result = mysqli_query($con,$sql);
$count =  mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)) 
{
     $_SESSION['id']=$row["id"];
     $id=$_SESSION['id'];
}
if($count>0)
{
    $sql= "select code from signin where  email = '$email' and password = '$password' ";
    $result = mysqli_query($con,$sql);
    $count =  mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $co = $row['code'];
    if($code == $row['code'])
    {
      $sql= "delete from signin where code = '$co' ";
      $result = mysqli_query($con,$sql);
      header("Location:profile.php?id=".$id);
    }

}
else
{
  echo "<script type='text/javascript'>";
  echo "alert('Please Enter Correct Email & Password')";
  echo "</script>";
}

}
if(isset($_POST['Submit']))
{
$email = $_POST['email'];
$password = $_POST['pass'];
$sql= "select * from staffsignup where  email = '$email' and password = '$password' ";
$result = mysqli_query($con,$sql);
$count =  mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)) 
{
     $_SESSION['id']=$row["id"];
     $id=$_SESSION['id'];
}
if($count>0)
{
    header("Location:sprofile.php?id=".$id);
}
else
{
    echo "<script type='text/javascript'>";
  echo "alert('Please Enter Correct Email & Password')";
  echo "</script>";
}
}
?>