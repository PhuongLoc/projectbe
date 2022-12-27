<?php session_start(); ?>
<?php 
require("../config.php");
require("../models/db.php");
require("../models/user.php");

//User
$User = new User;
$getAllUser = $User->getAllUser();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card" style="height: 410px;">
			<div class="card-header">
				<h3>Register</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="post">
					<!-- username -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input id="username" type="text" name="username" class="form-control" placeholder="Username">
					</div>
					<!-- /username -->

                    <!-- email -->
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>
						</div>
						<input type="text" name="email" class="form-control" placeholder="Email">
					</div>
					<!-- /email -->

					<!-- password -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" id="pass" class="form-control" placeholder="Password">
						<div id="ShowAndHide" class="input-group-prepend">
							<span class="input-group-text"><i onclick="ShowAndHide()" class="fa fa-eye" ></i></span>
						</div>
					</div>
					<!-- /password -->

					<!-- confirm password -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="confirmpassword" id="conf-pass" class="form-control" placeholder="Confirm Password">
						<div id="showhide" class="input-group-prepend">
							<span class="input-group-text"><i onclick="showhide()" class="fa fa-eye" ></i></span>
						</div>
					</div>
					<!-- /confirm password -->

					<!-- register -->
					<div class="form-group">
						<input type="submit" name="submit" value="Register" class="btn float-right login_btn">
					</div>
                    <!-- /register -->

				</form>
				<?php if(!empty($_POST['submit']))
				{
					if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['email']))
					{
						$username = $_POST['username'];
					    $password = $_POST['password'];
						$confirm_password = $_POST['confirmpassword'];
						$email = $_POST['email'];
					}
					foreach($getAllUser as $value)
					{
						if($value['username'] == $username || $password != $confirm_password)
						{
							echo "<script>alert('This account $username already exists or the password is incorrect!');</script>";
							exit;
						}
						else
						{
							$insertUser = $User->insertUser($username, $password, $email);					
							header("location: login.php");
							exit;
						}						
					}
				} ?>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">	
					Already have an account?<a href="login.php">Login</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../login/main.js"></script>
</body>
</html>