<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #00CED1;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #f1f1f1;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #818181;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #00CED1;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #00CED1;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
  color: #00CED1; 
}
#a{position: absolute;top:15px;}
#b{position: absolute;top:3px;right: 140px;}
.header {
  padding: 55px 19px 15px 15px;
  background-color:#EDF1FF ;
}


/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>
<div class="header" id="myHeader">
</div>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="sprofile.php">Profile</a>
  <a href="attendance.php">Attendance</a>
  <a href="snotification.php">Notification</a>  
  <a href="updatecome.php">Update Late & Early Incoming and Outgoing</a>  
  <a href="sfeedback.php">Feedback</a>
  <a href="signup.php">Sign Out</a>
</div>

<div id="main">
  <h1 id="b"><b>KidKinder</b></h1>
  <button class="openbtn" id="a" onclick="openNav()"> Go To Menu</button>  
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
