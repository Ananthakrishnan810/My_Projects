<?php
if(isset($_POST['ottp']))
{
  $email = $_POST['email'];
  $pass  = $_POST['pass'];
  $code  = substr(md5(mt_rand()), 0,6);
  $sql = "insert into signin(email,password,code)values('$email','$pass','$code')";
  $res = mysqli_query($con,$sql);

  $message = "Your Activation Code is".$code."";
  $to=$email;
  $subject = "Activation Code For Little Schine Daycare.com ";
  $from = 'ananthakrishnanp.m2022@mca.sjcetpalai.ac.in';
  $body = 'Your Activation Code is '.$code.'' ;
  $headers = "From:".$from;
  if(mail($to, $subject, $body,$headers))
  {
    echo "<script>";
    echo "alert(email sented) ";
    echo "</script>";
  }
  else
  {
    echo "<script>";
    echo "alert(email not sented) ";
    echo "</script>";
  } 
}
?>