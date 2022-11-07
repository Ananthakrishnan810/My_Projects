<!DOCTYPE html>
<html>
<head>
    <?php
        include('connect.php');
        include('saccess.php');
        session_start();
    ?>
<style type="text/css">
    body{
    background:#eee;
}

.card{
    border:none;

    position:relative;
    overflow:hidden;
    border-radius:8px;
    cursor:pointer;
}

.card:before{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#00CED1;
    transform:scaleY(1);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:after{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#00CED1;
    transform:scaleY(0);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:hover::after{
    transform:scaleY(1);
}


.fonts{
    font-size:11px;
}

.social-list{
    display:flex;
    list-style:none;
    justify-content:center;
    padding:0;
}

.social-list li{
    padding:10px;
    color:#00CED1;
    font-size:19px;
}


.buttons button:nth-child(1){
       border:1px solid #00CED1 !important;
       color:#00CED1;
       height:40px;
}

.buttons button:nth-child(1):hover{
       border:1px solid #00CED1 !important;
       color:#fff;
       height:40px;
       background-color:#00CED1;
}

.buttons button:nth-child(2){
       border:1px solid #00CED1 !important;
       background-color:#00CED1;
       color:#fff;
        height:40px;
}
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
</head>
<body>
<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                <?php
                 $id=$_SESSION['id'];
                 $s="select img from image where ssid='$id'";
                 $ab=mysqli_query($con,$s);
                 while ($row = mysqli_fetch_array($ab)) 
                 {     
                    echo "<div class='text-center'>";
                     echo "<img src='img/".$row['img']."'width=14% >";
                    echo "</div>";
                ?>
                <!--<div class="text-center">
                    <img src=" width="100" class="rounded-circle">
                </div>-->
                <?php
                }
                ?>
                    <?php
                      $id=$_SESSION['id'];
                      $sql= "select * from staffsignup where  id = '$id'  ";
                      $result = mysqli_query($con,$sql);
                      $count =  mysqli_num_rows($result);
                      while($row = mysqli_fetch_assoc($result)) 
                    {?>
                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 px-4 rounded text-white">Staff</span>
                    <h5 class="mt-2 mb-0"><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></h5>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts"><h6>Address:<?php echo $row['addres']; ?>Phone:<?php echo $row['phno'];?></h6> </p>
                    
                    </div>
                    
                     <ul class="social-list">
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-dribbble"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul>
                    
                    <div class="buttons">
                        
                        <a href='sadd.php'><button class="btn btn-outline-primary px-4">Add Photo</button></a>
                        <a href='sedit.php'><button class="btn btn-primary px-4 ms-3">Edit profile</button></a>
                    </div>
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    <?php
        }
    ?>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</body>
</html>
<?php
$id=$_SESSION['id'];
?>