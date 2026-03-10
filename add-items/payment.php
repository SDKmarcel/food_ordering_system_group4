
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <h1 class="payment-head">Payment Options</h1>

    <div class="container">
        <div>
           <img src="../src/payment.jpg" width="400px" style="border-radius: 10px;">  
        </div>
        <div>
            <a href="../customer-profile/profile.php" onclick="pay()">Pay offline</a>
        </div>
    </div>
</body>
</html>


<script>
    const pay = ()=>{
       alert("Order are submitted successfully !"); 
    }
</script>




