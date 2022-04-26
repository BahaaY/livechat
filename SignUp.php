<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

<link rel="stylesheet" href="style.css">
<?php include_once "header.php"; ?>
<?php include_once "php/signup.php"; ?>
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
<body>

  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand" id="brand">
          <a href="#hero"><h1><span>L</span>ive <span>C</span>hat</h1></a>
        </div>
        <div class="nav-list" >
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
          <h1 style="font-size: 50px;color:white" id="livechat"><span style="color: crimson;">L</span>ive <span style="color: crimson;">C</span>hat</h1></a>
            <li><a href="index.php" data-after="Home">Home</a></li>
            <li><a href="SignUp.php" data-after="SignUp"><span style="color:crimson">SignUp</span></a></li>
            <li><a href="login.php" data-after="Login">Login</a></li>
            <li><a href="about.php" data-after="About">About</a></li>
            <li><a href="contact.php" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


    <div class="wrapper">
    <section class="form signup">
      <header style="text-align: center;">SIGNUP</header>
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
								<?php 
									foreach ($error as $err) {
										echo "<p style='text-align:center;font-size:18px;color:red'>$err.</p>";
									}
								?>
        
          <div class="field input" style="top:15px">
            <div class="fas fa-user" id="ic"></div>
            <input type="text" name="username" required >
            <label>Username</label>
          </div>
        <div class="field input" style="top:20px">
        <div class="fas fa-envelope" id="ic" ></div>
          <input type="text" name="email" required>
          <label>Email Address</label>
        </div>
        <div class="field input" style="top:25px">
        <div class="fas fa-key" id="ic" ></div>
          <input type="password" name="password" required >
          <label>Password</label>
          <i class="fas fa-eye" ></i>
        </div>
        <div class="field input" style="top:30px">
        <div class="fas fa-key" id="ic" ></div>
          <input type="password" name="confirmpassword" required >
          <label>Confirm Password</label>
        </div>
          <div class="radio" style="position:relative;top: 36px;font-size:18px;padding-left:5px">
            Select Gender &nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" value="Male">Male&nbsp;&nbsp;
            <input type="radio" name="gender" value="Female">Female
          </div>
        <div class="field button" style="top:25px">
          <input type="submit" name="submit" value="Create account" id="submit" style="padding-right: 30px;" >
        </div>
      </form>
      <div class="link" style="padding-top:20px">Have an account? <a href="login.php">Log in</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/app.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#submit").click(function(){
              $("#error").animate({
              opacity: '0.5'
          }, 100).animate({
              opacity: '1'
          }, 100).animate({
              opacity: '0.5'
          }, 100).animate({
              opacity: '1'
          }, 100);
    });
  });
</script>
</body>




