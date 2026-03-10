<?php
    include("../../food-order/database-connection/connect.php");
    session_start();


?>


<?php


    if(isset($_SESSION['submit'])){
        $user_name = htmlspecialchars($_POST['user_name']);
        $password = htmlspecialchars($_POST['password']);

        if(!empty($user_name) && !empty($password)){
            $sql = "SELECT * FROM order_tb WHERE user_name='$user_name' limit 1";
            $res = mysqli_query($conn,$sql);

            if($res && mysqli_num_rows($res) > 0){
                $user_data = mysqli_fetch_assoc($res);

                if($user_data['password'] === $password){
                    $_SESSION['user_name'] = $user_data['user_name'];

                    $_SESSION['successlog'] = "<div>Successfully logged in !</div>";
                    header("Location: ../../food-order/customer-profile/profile.php");
                    exit();
                }else{
                    $_SESSION['error'] = "<div>Failed to log in !</div>";
                }
            }
        }
    }



?>




