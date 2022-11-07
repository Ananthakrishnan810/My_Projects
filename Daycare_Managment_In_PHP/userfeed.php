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
          $sql= "select sid,feedback from signup,feedback  where feedback.sid = signup.id";
            $result = mysqli_query($con,$sql);
            $count =  mysqli_num_rows($result);
            echo "<table class='table table-hover'>";
              echo "<tr>";
                echo "<th>Feedback</th>";
              echo "</tr>";
              while($row = mysqli_fetch_assoc($result)) 
               {
                $full=$row['feedback'];
                echo "<tr>";
                echo "<th>$full </th>";
                echo "</tr>";
                
              } 
              echo "</table>";
             
?>
</div>
</div>
    </div>
    
  </div>

</body>
</html>
