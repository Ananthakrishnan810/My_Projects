<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("connect.php");
  ?>
    <meta charset="utf-8">
    <title>KidKinder - Kindergarten Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style type="text/css">
input[type="text"]
{
  position: relative;
  left:10%;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#a{
  position: relative;
  left: -320px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#b{
   position: relative;
  left: 320px;
  top: -118px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#c{
  position: relative;
  left: -320px;
  top: -118px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#d{
  position: relative;
  left: 320px;
  top: -235px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#e{
  position: relative;
  left: -320px;
  top: -235px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#f{
  position: relative;
  left: 320px;
  top: -352px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#g{
  position: relative;
  left: -320px;
  top: -345px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#h{
  position: relative;
  left: 320px;
  top: -463px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#i{
  position: relative;
  left: -320px;
  top: -450px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#j{
  position: relative;
  left: 320px;
  top: -571px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#k{
  position: relative;
  left: -320px;
  top: -555px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#select{
  position: relative;
  left: 780px;
  top: -667px;
  width: 32%;
  padding: 12px;
  margin: -2px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;

}
#sub {
  background:#00CED1;
  color:white;
  border-style:outset;
  border-color:#00CED1;
  height:43px;
  width:495px;
  border-radius: 12px;
  position: absolute;
  top: 1000px;
  left: 450px;
}
h5
{
    position: absolute;
    left: 543px;
    top: 1080px;
}
</style>
<script type="text/javascript">
  function validateForm() {
  var f = document.forms["mform"]["firstname"].value;
  var l = document.forms["mform"]["lastname"].value;
  var a = document.forms["mform"]["ad"].value;
  var d = document.forms["mform"]["position"].value;
  var p = document.forms["mform"]["phone"].value;
  var e = document.forms["mform"]["email"].value;
  var pa = document.forms["mform"]["pass"].value;
  if (f == "") {
    alert("Firstname must be filled out");
    return false;
  }
  if (l == "") {
    alert("lastname must be filled out");
    return false;
  }
  if (a == "") {
    alert("address must be filled out");
    return false;
  }
  if (d == "") {
    alert("position must be filled out");
    return false;
  }
  if (p == "") {
    alert("phone number must be filled out");
    return false;
  }
  
  if (isNaN(p)) {
    alert("Please enter only number");
    return false;
  }
  if (p.length<10) {
    alert("please enter valid number");
    return false;
  }
  if (p.length>10) {
    alert("please enter valid number");
    return false;
  }
  if (e == "") {
    alert("email must be filled out");
    return false;
  }
  if (e.indexOf('@') <= 0) {
    alert("Invalid Syntax");
    return false;
  }
  if (e.charAt(e.length - 4)!='.') {
    alert("Invalid Syntax");
    return false;
  }
  if (pa == "") {
    alert("password must be filled out");
    return false;
  }
}
</script>
<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <i class="flaticon-043-teddy-bear"></i>
                <span class="text-primary">KidKinder</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link active">About</a>
                    <a href="class.html" class="nav-item nav-link">Classes</a>
                    <a href="team.html" class="nav-item nav-link">Teachers</a>
                    <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="signin.php" class="btn btn-primary px-4">Join Class</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Register Here</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Registeration</p>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <form method="POST" onsubmit="return validateForm()" name="mform">
    <div class="ab">
         <!--<label id="am">Child Firstname:</label>-->
          <br>
<center><input type="text" name="firstname"  placeholder= "Firstname" size="15" id="a"   autocomplete="off"/></center>
          <br>
      </div>
      <div class="cd">
      <!--<label id="pm">Child Middlename:</label>-->
          <br>
      <center><input type="text" name="middlename"  placeholder="Middlename" size="15"  id="b" autocomplete="off"/></center>
          <br>
      </div>
      <div class="ab">
      <!--<label id="am">Child Lastname: </label>-->
      <br>
      <center><input type="text" name="lastname"  placeholder="Lastname" size="15" id="c"  autocomplete="off"/></center>
        <br>
      </div>
      <div class="cd">
        <!--<label id="pm">
         Fathername :
      </label>-->
        <br>
      <center><input type="text" name="phone" placeholder="phonenumber" size="10" id="d" autocomplete="off"/></center>
        <br>
      </div>
      <div class="ab">
        <!--<label id="am">
         Mothername :
      </label>-->
        <br>
      <center><input type="text" name="ad" placeholder="address" size="10" id="e"  autocomplete="off"/></center>
        <br>
      </div>
      <div class="cd">
      <!--<label id="pm"> Address: </label>-->
        <br>
       <center><select name="position" id="f">
         <option>Teacher</option>
         <option>support staff</option>
       </select>
        <br>
      </div>
      <div class="ab">
        <!--<label id="am">Date of Brith</label>-->
        <br>
      <center><input type="text"  name="email" placeholder="email"  id="g"  autocomplete="off"/></center>
        <br>
      </div>
      <div class="cd">
   <!--<label id="pm">
      Phone :
   </label>-->
        <br>
      <center><input type="text" name="pass"  placeholder="password" size="10" id="h"  autocomplete="off"/></center>
        <br>
      </div>
      <div class="ab">
  <!--<label for="email" id="am">Email</label>-->
        <br>
     
      </div>
      <center><input type="submit" name="Submit" id="sub"></center>
     </div> 
     <br>    
     <h5><a href="signin.php">If you already register user please login</h5>
        <br>
     <!--<h5><font color="#000080">Are you forgot password,</font></h5>-->
     <br>
     <br>
   </form>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
<?php
if(isset($_POST['Submit']))
{
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$add = $_POST['ad'];
$post = $_POST['position'];
$email = $_POST['email'];
$password = $_POST['pass'];
  $s="insert into staffsignup(firstname,middlename,lastname,phno,addres,position,email,password) values ('$firstname','$middlename','$lastname','$phone','$add','$post','$email','$password')";
   if(mysqli_query($con,$s))
   {
      echo "<script type='text/javascript'>";
      echo "alert('Completed Successfully')";
      echo "</script>";
   }
   else
   {
        echo "<script type='text/javascript'>";
      echo "alert('Please Enter Again,There is a problem in it')";
      echo "</script>";

   }
}
?>