<?php
$message = "Your Activation Code is";
  $to='ananthakrishna810@gmail.com';
  $subject = "Activation Code For Little Schine Daycare.com ";
  $from = 'ananthakrishnanp.m2022@mca.sjcetpalai.ac.in';
  $body = 'Your Activation Code is ' ;
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
?>