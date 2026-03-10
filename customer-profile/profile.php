<?php   

    include("../../food-order/database-connection/connect.php");
    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu profile</title>
    <link rel="stylesheet" href="menu-profile.css">
</head>
<body>


            


    <div class="container">
        <div class="logo">
            <a href="index.php"><img src="../src/logo.png" alt="logo" width="50px"></a>


        <?php
            $sql = "SELECT * FROM order_tb";   
            $res = mysqli_query($conn, $sql); 
            
            if($res && mysqli_num_rows($res) > 0){
                $user_data = mysqli_fetch_assoc($res);
                $user_name = $user_data['user_name'];

                }
                

        ?>

            <p>Welcome, <?php echo $ $user_name ?></p>
            <a href="./register/login.php" class="login">Logout</a>
        </div>



        <div class="menu menu-bar">
            
        <?php
            $sql = "SELECT * FROM order_tb";   
            $res = mysqli_query($conn, $sql); 
            
            if($res && mysqli_num_rows($res) > 0){
                $user_data = mysqli_fetch_assoc($res);
                $profile = $user_data['image'];

                    echo'            
                        <img src="images/'.$profile.'" class="profile-img" id="profile-img">
                    ';
                }
                

        ?>
            
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="../../food-order/customer-profile/profile.php">Foods</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    <?php

        if(isset($_SESSION['successlog'])){
            echo $_SESSION['successlog'];
            unset($_SESSION['successlog']);
        }

    ?>

    <div class="profile-dialog" id="profile-dialog">
        <p class="email">oseiprince@gmail.com</p>
        <hr>
        <a href="#" class="account" style="text-decoration: none; color: black">Profile & account</a>
        <hr>
        <a href="#" style="text-decoration: none; color: black" class="out">Sign Out</a>
    </div>


    <h1>You have zero pending order</h1>



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




