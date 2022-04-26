<?php 
session_start();
$error = array();

require "mail.php";

include "php/config.php";

	$mode = "enter_email";
	if(isset($_GET['mode'])){
		$mode = $_GET['mode'];
	}

	//something is posted
	if(count($_POST) > 0){

		switch ($mode) {
			case 'enter_email':
				// code...
				$email = mysqli_real_escape_string($conn,$_POST['email']);
				//validate email
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$error[] = "Please enter a valid email";
				}elseif(!valid_email($email)){
					$error[] = "This email was not found";
				}else{

					$_SESSION['forgot']['email'] = $email;
					send_email($email);
					header("Location: forgot.php?mode=enter_code");
					die;
				}
				break;

			case 'enter_code':
				// code...
				$code = mysqli_real_escape_string($conn,$_POST['code']);
				$result = is_code_correct($code);

				if($result == "the code is correct"){

					$_SESSION['forgot']['code'] = $code;
					header("Location: forgot.php?mode=enter_password");
					die;
				}else{
					$error[] = $result;
				}
				break;

			case 'enter_password':
				// code...
				$password = mysqli_real_escape_string($conn,$_POST['password']);
				$password2 = mysqli_real_escape_string($conn,$_POST['password2']);
				if(strlen($password) <= 6){
					$error[] = "Password must be at least 6 characters";
				}
				elseif($password != $password2){
					$error[] = "$password2 is not the same password";
				}elseif(!isset($_SESSION['forgot']['email']) || !isset($_SESSION['forgot']['code'])){
					header("Location: forgot.php");
					die;
				}else{
					save_password($password);
					if(isset($_SESSION['forgot'])){
						unset($_SESSION['forgot']);
					}
					echo "<script>alert('Password changed successfully');window.location.href='login.php';</script>";
					die;
				}
				break;
			
			default:
				// code...
				break;
		}
	}

	function send_email($email){
		
		global $conn;

		$expire = time() + (60 * 1);
		$code = rand(10000,99999);
		$email = addslashes($email);

		$query = "insert into codes (email,code,expire) value ('$email','$code','$expire')";
		mysqli_query($conn,$query);

		//send email here
		send_mail($email,'Password reset',"Your code is " . $code);
	}
	
	function save_password($password){
		
		global $conn;

		$passwordd = $password;
		$email = addslashes($_SESSION['forgot']['email']);

		$query = "update users set password = '$password' where email = '$email' limit 1";
		mysqli_query($conn,$query);

	}
	
	function valid_email($email){
		global $conn;

		$email = addslashes($email);

		$query = "select * from users where email = '$email' limit 1";		
		$result = mysqli_query($conn,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				return true;
 			}
		}

		return false;

	}

	function is_code_correct($code){
		global $conn;

		$code = addslashes($code);
		$expire = time();
		$email = addslashes($_SESSION['forgot']['email']);

		$query = "select * from codes where code = '$code' && email = '$email' order by id desc limit 1";
		$result = mysqli_query($conn,$query); 
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_assoc($result);
				if($row['expire'] > $expire){

					return "the code is correct";
				}else{
					return "the code is expired";
				}
			}else{
				return "the code is incorrect";
			}
		}

		return "the code is incorrect";
	}

	
?>
<style>
.wrapper{
  position: absolute;
  min-width: 45%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
#submit:hover{
  background-color: rgb(44, 44, 44);
}

@media only screen and (min-width: 1200px) {
  #livechat{
    display: none;
  }

}

@media only screen and (min-width: 768px) {
    div.wrapper{
      max-width: 700px;
    }
}

@media only screen and (max-width: 540px) {
    div.wrapper{
      max-width: 460px;
    }
}

@media only screen and (max-width: 450px) {
    #brand {
        display: none;
    }
    .nav-list {
        padding-left: 83%;
    }
    div.wrapper{
      width: 380px;
    }
}

@media only screen and (max-width: 400px) {
    #brand {
        display: none;
    }
    .nav-list {
        padding-left: 83%;
    }
    div.wrapper{
      width: 340px;
    }
}

@media only screen and (max-width: 320px) {
    #brand {
        display: none;
    }
    .nav-list {
        padding-left: 83%;
    }
    div.wrapper{
      width: 280px;
    }
}

@media only screen and (max-width: 280px) {
    #brand {
        display: none;
    }
    .nav-list {
        padding-left: 83%;
    }
    div.wrapper{
      width: 220px;
    }
}

</style>
<link rel="stylesheet" href="style.css">
<?php include_once "header.php"; ?>
<body>

		<?php 

			switch ($mode) {
				case 'enter_email':
					// code...
					?>
						<div class="wrapper">
						<section class="form login">
						<header style="text-align: center;">Reset password</header>
						<form action="forgot.php?mode=enter_email" method="POST" >
							<span style="font-size: 17px;color:red;text-align:center">
								<?php 
									foreach ($error as $err) {
										// code...
										echo $err . "<br>";
									}
								?>
							</span>
							<div class="field input">
								<div class="fas fa-envelope" id="ic" ></div>
								<input type="text" name="email"  required >
								<label>Enter your email</label>
							</div>
							<div class="field button">
							<input type="submit" name="submit"  value="Next" style="padding-right: 30px;">
							</div>
							<div class="link"><a href="login.php">Back to Login</a></div>
						</section>
					</div>
					<?php				
					break;

				case 'enter_code':
					// code...
					?>
						<div class="wrapper">
						<section class="form login">
						<header style="text-align: center;">Verification code</header>
						<form action="forgot.php?mode=enter_code" method="POST" >
							<span style="font-size: 17px;color:red;text-align:center">
								<?php 
									foreach ($error as $err) {
										// code...
										echo $err . "<br>";
									}
								?>
							</span>
							<div class="field input">
							<div class="fas fa-lock" id="ic" ></div>
								<input type="text" name="code" required >
								<label>Enter the code send to your email</label>
							</div>
							<div class="field button">
							<input type="submit" name="submit" value="Next" style="padding-right: 30px;">
							</div>
							<div class="link"><a href="forgot.php">Start Over</a></div>
						</section>
					</div>
					<?php
					break;

				case 'enter_password':
					// code...
					?>
						<div class="wrapper">
						<section class="form login">
						<header style="text-align: center;">New password</header>
						<form action="forgot.php?mode=enter_password" method="POST" >
							<span style="font-size: 17px;color:red;text-align:center">
								<?php 
									foreach ($error as $err) {
										// code...
										echo $err . "<br>";
									}
								?>
							</span>
							<div class="field input">
							<div class="fas fa-lock" id="ic" ></div>
								<input type="text" name="password" required >
								<label>Enter new password</label>
							</div>
							<div class="field input">
							<div class="fas fa-lock" id="ic" ></div>
								<input type="text" name="password2"  required >
								<label>Retype password</label>
							</div>
							<div class="field button">
							<input type="submit" name="submit" value="Next" style="padding-right: 30px;">
							</div>
							<div class="link"><a href="forgot.php">Start Over</a></div>
						</section>
					</div>
					<?php
					break;
				
				default:
					// code...
					break;
			}

		?>


</body>
</html>