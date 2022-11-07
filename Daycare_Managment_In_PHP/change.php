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
input[type=text]
{
  position: relative;
  left: 10%;
  width: 40%;
  padding: 14px;
  margin: 5px 0 19px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
label{position:relative;left:332px;top: 53px;}
#sub {
  background:#00CED1;
  color:white;
  border-style:outset;
  border-color:#00CED1;
  height:43px;
  width:195px;
  border-radius: 12px;
  position: absolute;
  left: 700px;
}
h5
{
    position: absolute;
    left: 670px;
}
</style>
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
            <h3 class="display-3 font-weight-bold text-white">Change Password Here</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href=""></a></p>
                <p class="m-0 px-2"></p>
                <p class="m-0"></p>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <form method="POST">
    <div>
          <label><b><font color="#000080 ">Email</font></b>:</label>
          <center><input type="text" name="email"  placeholder= "Firstname" size="15" required autocomplete="off"/></center>
          <label><b><font color="#000080"> New password</font></b>:</label>
          <center><input type="text" name="pass"  placeholder="Middlename" size="15"  autocomplete="off"/></center>
          <center><input type="submit" name="Submit" id="sub"></center>
          <br>
     </div> 
    </form>
     <br>    
     <br>
     <h5><a href="signin.php">Please click here to go back</h5>
    <!-- About Start -->

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
$email = $_POST['email'];
$password = $_POST['pass'];
$sql= "update signup set password='$password' where email='$email'";
$result = mysqli_query($con,$sql);
if($result>0)
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