
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <link rel="stylesheet" href="foods.css">

</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="../index.html"><img src="../src/logo.png" alt="logo" width="50px"></a>
            <p>Welcome guest</p>
            <a href="../register/login.html" class="login">Login</a>
        </div>

        <div class="menu menu-bar">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="#">Categories</a></li>
                 <li><a href="./foods.html">Foods</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>




    <h2 class="menu-title">Food Menu</h2>

    <div class="menu-container">
        <div class="card">
            <img src="../src/banku.jpg" alt="banku">
            <div class="card-content">
                <h3>Banku</h3>
                <p class="price">GH¢ 50</p>
                <p class="description">Chicken Dumpling with herbs from Mountains</p>
                <a href="../add-items/cart.html" class="btn" onclick="pics()">Order Now</a>
            </div>
        </div>

        <div class="card">
            <img src="../src/fufu.jpg" alt="Burger">
            <div class="card-content">
                <h3>Fufu Special</h3>
                <p class="price">GH¢ 70</p>
                <p class="description">Burger with ham, pineapple and lots of cheese</p>
                <a href="../add-items/cart.html" class="btn" onclick="pics()">Order Now</a>
            </div>
        </div>

        <div class="card">
            <img src="../src/jollof_rice.jpg" alt="Momo"`>
            <div class`="card-content">
                <h3>Jollof Rice</h3>
                <p class="price">GH¢ 120</p>
                <p class="description">Best spicy momo for winter</p>
                <a href="../add-items/cart.html" class="btn" onclick="pics()">Order Now</a>
            </div>
        </div>

        <div class="card">
            <img src="../src/kenkey.jpg" alt="Pizza">
            <div class="card-content">
                <h3>Kenkey</h3>
                <p class="price">GH¢ 40</p>
                <p class="description">Pizza with chicken, ham, buff, and vegetables</p>
                <a href="../add-items/cart.html" class="btn" onclick="pics()">Order Now</a>
            </div>
        </div>
    </div>

    <div class="see-all">
        <a href="see-all.php">See All Foods</a>
    </div>


<footer>
    <div class="foods-footer-container">
        <p>All right reserved. Designed by Group 4 @ copyright</p>
    </div>
</footer>


<script>
    const pics = ()=>{
        alert("Cart added successfully !");
    }
</script>
</body>
</html>