<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <style>
        /* CSS STYLES */
        body {
            background-color: #f1f2f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 40px 0;
        }

        .menu-title {
            text-align: center;
            font-size: 28px;
            color: #333;
            margin-bottom: 40px;
        }

        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .card {
            background: white;
            width: 450px;
            padding: 15px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .card img {
            width: 100px;
            height: 100px;
            border-radius: 15px;
            object-fit: cover;
            margin-right: 20px;
        }

        .card-content h3 {
            margin: 0;
            font-size: 18px;
            color: #2d3436;
        }

        .price {
            font-weight: bold;
            margin: 5px 0;
            color: #2d3436;
        }

        .description {
            font-size: 13px;
            color: #636e72;
            margin-bottom: 12px;
        }

        .btn {
            background-color: #ff7675;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            font-size: 13px;
        }

        .see-all {
            text-align: center;
            margin-top: 30px;
        }

        .see-all a {
            color: #ff7675;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2 class="menu-title">Food Menu</h2>

    <div class="menu-container">
        <div class="card">
            <img src="src/photo_2026-03-04_13-57-01.jpg" alt="Dumplings">
            <div class="card-content">
                <h3>Dumplings Specials</h3>
                <p class="price">$5.00</p>
                <p class="description">Chicken Dumpling with herbs from Mountains</p>
                <button class="btn">Order Now</button>
            </div>
        </div>

        <div class="card">
            <img src="src/photo_2026-03-04_13-57-11.jpg" alt="Burger">
            <div class="card-content">
                <h3>Best Burger</h3>
                <p class="price">$4.00</p>
                <p class="description">Burger with ham, pineapple and lots of cheese</p>
                <button class="btn">Order Now</button>
            </div>
        </div>

        <div class="card">
            <img src="src/photo_2026-03-04_13-57-20.jpg" alt="Momo">
            <div class="card-content">
                <h3>Sadeko Momo</h3>
                <p class="price">$6.00</p>
                <p class="description">Best spicy momo for winter</p>
                <button class="btn">Order Now</button>
            </div>
        </div>

        <div class="card">
            <img src="src/pizza.jpg" alt="Pizza">
            <div class="card-content">
                <h3>Mixed Pizza</h3>
                <p class="price">$10.00</p>
                <p class="description">Pizza with chicken, ham, buff, and vegetables</p>
                <button class="btn">Order Now</button>
            </div>
        </div>
    </div>

    <div class="see-all">
        <a href="#">See All Foods</a>
    </div>

</body>
</html>