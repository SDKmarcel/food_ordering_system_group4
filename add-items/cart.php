

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="../add-items/cart.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="index.php"><img src="../src/logo.png" alt="logo" width="50px"></a>
            <p>Welcome guest</p>
            <a href="./register/login.php" class="login">Logout</a>
        </div>

        <div class="menu menu-bar">
            <img src="img.jpg" class="profile-img" id="profile-img">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="../../food-order/menu-bar/foods.php">Foods</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    <div class="profile-dialog" id="profile-dialog">
        <p class="email">oseiprince@gmail.com</p>
        <hr>
        <a href="#" class="account" style="text-decoration: none; color: black">Profile & account</a>
        <hr>
        <a href="#" style="text-decoration: none; color: black" class="out">Sign Out</a>
    </div>



    <table border="1px" class="table">
        <tr>
                <th>No:</th>
                <th>Product Title</th>
                <th>Product Image</th> 
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Remove</th>
                <th>Operations</th>
                <th>Operations</th>
        </tr>

        <tr>
            <td>1.</td>
            <td>Banku</td>
            <td>Banku</td>
            <td><input type="text"></td>
            <td>500</td>
            <td><input type="checkbox"></td>
            <td><a href="#" class="update_btn">Update Cart</a></td>
            <td><a href="#" class="delete_btn">Remove Item</a></td>
        </tr>
</table>

<div class="total">
    <h2>Subtotal: GH¢ 900</h2>
    <a href="payment.php" class="continue_btn">Continue Shopping</a>
    <a href="#" class="check_btn">Checkout</a>
</div>





<script>
    let profile_img = document.getElementById("profile-img");
    let profile_dialog = document.getElementById("profile-dialog");

    profile_img.addEventListener("click", ()=>{
        if(profile_dialog.style.display === "none"){
            profile_dialog.style.display = "block";
        }else{
            profile_dialog.style.display = "none";
        }
        
    });




</script>
</body>
</html>










