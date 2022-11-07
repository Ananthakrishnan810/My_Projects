<html>
<head>
    <?php
       include('connect.php');
       include('access.php');
       session_start();  
    ?>
<style type="text/css">
  #rzp-button1{
  position: relative;
  left: 45px;
  width: 50%;
  top: -140px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  background-color: #00CED1;
}
input[type=text], select {
  position: relative;
  left: 45px;
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
label{position: relative;right: -47px;}
.gif{
  position: absolute;
  bottom: 110px;
  left: 750px;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
}
#rzp-button1:hover {
  background-color: #FFA500;
}
</style>
</head>
<body>
    <h1><center><font color="#00CED1"><b>Make Payment</b></font></center></h1>

<div>
  <form method="POST">
    <?php
            $id=$_SESSION['id'];
            $sql= "select total ,firstname,middlename,lastname,phno,email from payment,signup where  payment.sid = signup.id and sid ='$id' ";
            $result = mysqli_query($con,$sql);
            $count =  mysqli_num_rows($result);
            while($row = mysqli_fetch_assoc($result)) 
            {?>
    <br>
    <br>
    <br>
     <label for="lname">Fullname:</label>
     <br>
    <input type="text" name="name" id="name"  value="<?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname'];  ?>">
    <input type="hidden" name="phone" id="phone"  value="<?php echo $row['phno']; ?>">
    <br>
    <label for="lname">Email:</label>
    <br>
    <input type="text" name="email" id="email"  value="<?php echo $row['email']; ?>">
    <br>
    <label for="lname">Amount:</label>
    <br>
    <input type="text" id="amount" name="amount" value="<?php  echo $row['total']  ?>">
    <br>
    <br>
    <br>
   <?php
   }
   ?>
    
    <div class="gif">
        &nbsp&nbsp&nbsp&nbsp&nbsp<img src="img/pay.gif" width="59%">
    </div>
    <br>
  </form>


<br>
    <br>
    <br>
    <br>
    <br>
    <button  id="rzp-button1" onclick="paynow()">Pay</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </div>
    
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function paynow(){
      var name = document.getElementById("name").value;
      var phone = document.getElementById("phone").value;
      var email = document.getElementById("email").value;
      var amount = document.getElementById("amount").value;
var options = {
    "key": "rzp_test_H6QNYKDknEGiDD", // Enter the Key ID generated from the Dashboard
    "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    },
    "prefill": {
        "name": name,
        "email": email,
        "contact": phone
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});

    rzp1.open();


}
</script>
</body>
</html>