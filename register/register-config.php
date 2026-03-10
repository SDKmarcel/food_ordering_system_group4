<?php    
    include("../../food-order/database-connection/connect.php"); 
    session_start();
?>




<?php

    if(isset($_POST['submit'])){
        $user_name = htmlspecialchars($_POST['user_name']);
        $email = htmlspecialchars($_POST['email']);

        $user_image = $_FILES['user_image']['name'];
        $temp_name = $_FILES['user_image']['tmp_name'];
        $image_folder = 'images/'.$user_name;

        $password = $_POST['password'];
        $contact = $_POST['contact'];

        if(!empty($user_name) && !empty($email) && !empty($user_image) && !empty($password) && !empty($contact)){
            $sql = "INSERT INTO order_tb (user_name, email, image, password, mobile_number) VALUES('$user_name', '$email', '$user_image', '$password', '$contact')";
            $res = mysqli_query($conn, $sql);

            if($res){
                $_SESSION['success'] = "<div class='success'>Account created successful !</div>";
                header("Location: ../../food-order/register/login.php");
                exit();
            }else{
                echo "Faild to create an account";
                header("Location: ../../food-order/register/register.php");
                exit();
            }
        }
    }



?>




