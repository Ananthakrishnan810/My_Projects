<!DOCTYPE html>
<html>
<head>
<?php
	session_start();
	include("connect.php");
  include('accessin.php');
?>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="jumotron">
      <div class="card">
        <div class="card-header">
         Featured
      </div>
      <div class="card-body">
        <h5 class="card-title"></h5>
        <?php
          $sql= "select firstname,middlename,lastname,phno,addres,sid,place from signup ,bus  where bus.sid = signup.id and status='nothing'";
            $result = mysqli_query($con,$sql);
            $count =  mysqli_num_rows($result);
            echo "<table class='table table-hover'>";
              echo "<tr>";
                echo "<th>Fullname</th>";
                echo "<th>Phone Number</th>";
                echo "<th>Address</th>";
                echo "<th>Place</th>";
                echo "<th>Remarks</th>";
                echo "<th></th>";
                echo "<th>Approve</th>";
                echo "<th>Not Approve</th>";
              echo "</tr>";
              while($row = mysqli_fetch_assoc($result)) 
               {
                $full=$row['firstname'];
                $mid=$row['middlename'];
                $last=$row['lastname'];
                $phone=$row['phno'];
                $add=$row['addres'];
                $place=$row['place'];
                $sid=$row['sid'];
                echo "<tr>";
                echo "<th>$full $mid $last</th>";
                echo "<th>$phone</th>";
                echo "<th>$add</th>";
                echo "<th>$place</th>";
                echo "<form method='POST'>";
                echo "<th><input type='text' name='remark'></th>";
                echo "<th><input type='hidden' name='sample' value='$sid'></th>";
                echo "<th><input type='submit' name='approve' value='approve'></th>";
                echo "<th><input type='submit' name='napprove' value='reject'></th>";
                echo "</tr>";
                echo "</form>";
                
              } 
              echo "</table>";
              if (isset($_POST['approve']))
              {
                 $remark = $_POST['remark'];
                 $sample = $_POST['sample'];
                 $sql="UPDATE bus SET remark='$remark',status='approve' WHERE sid='$sample'";
                 $res=mysqli_query($con,$sql);
                 if($res>0)
                 {
                    echo "<script type='text/javascript'>";
                    echo "alert('Updated Successfully')";
                    echo "</script>";
                 }
              }
              if (isset($_POST['napprove']))
              {
                 $remark = $_POST['remark'];
                 $sample = $_POST['sample'];
                 $sql="UPDATE bus SET remark='$remark',status='rejected' WHERE sid='$sample'";
                 $res=mysqli_query($con,$sql);
                 if($res>0)
                 {
                    echo "<script type='text/javascript'>";
                    echo "alert('Updated Successfully')";
                    echo "</script>";
                 }
              }

?>
</div>
</div>
    </div>
    
  </div>

</body>
</html>
