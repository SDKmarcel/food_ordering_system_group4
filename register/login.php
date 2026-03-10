<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<link rel="stylesheet" href="register.css">
<style>
	.success{
		color: #f44313;
	}
</style>

<body>

	<?php   
		if(isset($_SESSION['success'])){
			echo "<div class='success>'" .$_SESSION['success']. "</div>";
			unset($_SESSION['success']);
		}

		if(isset($_SESSION['error'])){
			echo $_SESSION['error'];
			unset($_SESSION['error']);
		}
	
	?>
    <br> <br> <br> <br> <br> <br>
	<div class="container">
		<div class="joindiv">
			<div class="circlediv">
				<div class="cir1"></div>
			</div>
			<div class="ja">
				<div class="jc">
					<div class="join">LOGIN USER</div>
					<div class="account">Login to get started</div>
				</div>
			</div>


			<div class="circlediv">
				<div class="cir2"></div>
			</div>
		</div>
		<div class="signdiv">
			<div class="sf">
				<h1 class="signup" style="color: #f44313;">LOGIN USER</h1>
				<form action="login-config.php" method="POST">
                    <div class="form-container">
                        <div>
                            <input type="text" name="user_name" required placeholder="Enter your user name"> 
                            </div>
                            
                            <div>
                                <input type="password" name="password" required placeholder="Password">
                            </div>
                            
                            <div>
                            <input type="submit" name="submit" value="Login" class="signupm" style="cursor: pointer;"> 
                            </div>
                            
                            <div>
                                <p>Don't have an account? <a href="./register.html" style="text-align:center; ">Create account</a></p>
                     </div>
                            
                </form>
        
                        </div>
                    
                    </div>

                
            </div>
        </div>
                    
</body>
</html>






