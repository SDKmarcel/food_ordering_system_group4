<?php
    include("../../food-order/database-connection/connect.php");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>


</head>
<link rel="stylesheet" href="register.css">
<body>

	<div class="container">
		<div class="joindiv">
			<div class="circlediv">
				<div class="cir1"></div>
			</div>
			<div class="ja">
				<div class="jc">
					<div class="join">NEW USER</div>
					<div class="account">Create an account to get started.</div>
				</div>
			</div>


			<div class="circlediv">
				<div class="cir2"></div>
			</div>
		</div>
		<div class="signdiv">
			<div class="sf">
				<h1 class="signup" style="color: #f44313;">NEW USER REGISTRATION</h1>
				<form action="../../food-order/register/register-config.php" method="POST" enctype="multipart/form-data">
                    <div class="form-container">
                        <div>
                            <input type="text" name="user_name" id="user_name" required placeholder="Enter your name"> 
                            </div>
                            
                            <div>
                            <input type="email" name="email" id="email" required placeholder="Enter your email address">  
                            </div>

                            <div class="upload-img">
                                <img src="img.jpg" id="register-img" class="register-img">
                            </div>
                            
                            <div class="upload-img">
                                <label for="user_image" class="upload" required style="cursor: pointer;">Upload Your Pic</label> <br>
                                <input type="file" name="user_image" id="user_image" style="display: none;">
                            </div>
                            
                            <div>
                                <input type="password" name="password" required id="password" placeholder="Enter password">
                            </div>

                            <div>
                                <input type="password" name="cpassword" required id="cpassword" placeholder="Confirm password">
                            </div>
                            
                            <div>
                                <input type="text" name="contact" id="contact" required placeholder="Enter your mobile number"> 
                            </div>
                            
                            <div>
                                <button style="cursor: pointer; border: none" name="submit" id="signup" class="signupm">Signup</button>
                            </div>
                            <hr>
                            <div>
                                <p>Already have an account? <a href="./login.php" style="text-align:center;">Login</a></p>
                     </div>
                            
                </form>
        
                        </div>
                    
                    </div>

                
            </div>
        </div>
                    

<script>
    let register_img = document.getElementById("register-img");
    let user_image = document.getElementById("user_image");

    user_image.addEventListener("change", ()=>{
        register_img.src = URL.createObjectURL(user_image.files[0]);
    })

    let signup = document.getElementById("signup");
    let image = document.getElementById("image");
    let image_error = document.getElementById("image-error");


</script>
</body>
</html>


