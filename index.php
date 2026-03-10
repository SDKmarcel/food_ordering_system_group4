<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order Website</title>
</head>
<link rel="stylesheet" href="index.css">

<body>
    <?php include("./config-bars/menu.php"); ?>
    <div class="section-1">
        <div class="logo-food">
            <img src="./src/logo-food.png" alt="logo-food" width="340px">
        </div>

        <div class="search-bar">
            <form action="" method="POST" autocomplete="off">
                <input type="text" name="search-food" class="search-food search" placeholder="Search for food">
                <input type="submit" value="Search" class="search-food-btn">
            </form>
        </div>
    </div>

    <div class="section-2">
        <div>
            <h1 style="text-align: center;">Explore Foods</h1>

            <div class="image-section">
                <div class="pic1">
                    <img src="./src/banku.jpg" alt="rice" width="450px" style="border-radius: 15px;">
                    <h2>Banku</h2>
                    <p>Price: GH¢ 50</p> <br>
                    <a href="./add-items/cart.php" class="pizza-btn" onclick="pics()">Add to cart</a>
                </div>

                <div class="pic2">
                    <img src="./src/fufu.jpg" alt="rice" width="450px" style="border-radius: 15px;">
                    <h2>Fufu Special</h2>
                    <p>Price: GH¢ 70</p> <br>
                    <a href="./add-items/cart.php" class="pizza-btn" onclick="pics()">Add to cart</a>
                </div>

                <div class="pic3">
                    <img src="./src/jollof_rice.jpg" alt="rice" width="400px" style="border-radius: 15px;">
                    <h2>Jollof Rice</h2>
                    <p>Price: GH¢ 120</p> <br>
                    <a href="./add-items/cart.php" class="pizza-btn" onclick="pics()">Add to cart</a>
                </div>

                <div class="pic4">
                    <img src="./src/kenkey.jpg" alt="rice" width="350px" style="border-radius: 15px;">
                    <h2>Kenkey</h2>
                    <p>Price: GH¢ 40</p> <br>
                    <a href="./add-items/cart.php" class="pizza-btn" onclick="pics()">Add to cart</a>
                </div>

                <div class="pic5">
                    <img src="./src/pizza.jpg" alt="rice" width="450px" style="border-radius: 15px;">
                    <h2>Pizza</h2>
                    <p>Price: GH¢ 300</p> <br>
                    <a href="./add-items/cart.php" class="pizza-btn" onclick="pics()">Add to cart</a>
                </div>

                <div class="pic6">
                    <img src="./src/rice_and_stew.png" alt="rice" width="450px" style="border-radius: 15px;">
                    <h2>Plain Rice</h2>
                    <p>Price: GH¢ 100</p> <br>
                    <a href="./add-items/cart.php" class="pizza-btn" onclick="pics()">Add to cart</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="all-footer">
        <?php  include("./config-bars/footer.php");  ?>
    </footer>


<script>


    const pics = ()=>{
        alert("Cart added successfully !");
    }
</script>
</body>
</html>



