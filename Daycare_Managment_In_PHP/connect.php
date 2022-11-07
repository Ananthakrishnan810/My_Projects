O<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db_daycare";
$con= new mysqli($servername,$username,$password,$dbname);
if(!$con)
{
die("connection_failed:".mysqli_connect_error());
}
?>
