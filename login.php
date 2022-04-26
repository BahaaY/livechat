<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
      header("location: users.php");
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
<?php include_once "php/login.php"; ?>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand" id="brand">
          <a href="#hero"><h1><span>L</span>ive <span>C</span>hat</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
          <h1 style="font-size: 50px;color:white" id="livechat"><span style="color: crimson;">L</span>ive <span style="color: crimson;">C</span>hat</h1></a>
            <li><a href="index.php" data-after="Home">Home</a></li>
            <li><a href="SignUp.php" data-after="SignUp">SignUp</a></li>
            <li><a href="login.php" data-after="Login"><span style="color:crimson">LogIn</span></a></li>
            <li><a href="about.php" data-after="About">About</a></li>
            <li><a href="contact.php" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- LogIn Section -->
    <div class="wrapper">
    <section class="form login">
    <header style="text-align: center;">LOGIN</header>
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <?php 
									foreach ($error as $err) {
										echo "<p style='text-align:center;font-size:18px;color:red'>$err.</p>";
									}
								?>
        <div class="field input" style="top:15px">
        <div class="fas fa-envelope" id="ic" ></div>
          <input type="text" name="email" id="email" required value="<?php if(isset($_COOKIE['LiveChatEmail'])){echo $_COOKIE['LiveChatEmail'];}?>">
          <label>Email Address</label>
        </div>
        <div class="field input" style="top:20px" >
        <div class="fas fa-key" id="ic" ></div>
          <input type="password" name="password" id="password" required  value="<?php if(isset($_COOKIE['LiveChatPassword'])){echo $_COOKIE['LiveChatPassword'];}?>">
          <label>Password</label>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button" style="top:20px">
          <input type="submit" name="submit" id="submit" value="Log In" style="padding-right: 30px;">
        </div>
        <div style="font-size: 17px;padding-top:10px;color:white;padding-top:32px" class="check">
            <label>
            <input type="checkbox" name="remember" id="remember">Remember me
              <span></span>
            </label>
        </div>
        <div class="link"><a href="DeleteCookies.php">Don't want remember Email and Password? </a></div>
      </form>
      <div class="link">Don't have an account? <a href="SignUp.php">Sign up</a></div>
      <div class="link"><a href="forgot.php">Forgot password?</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <!-- End LogIn Section -->
  <script src="javascript/app.js"></script>

</body>
</html>