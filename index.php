
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
</head>
<style>
/* Media Query For Tablet */
@media only screen and (max-width: 450px) {
    /* header */
    #brand {
        display: none;
    }
    .nav-list {
        padding-left: 83%;
    }
    /* End header */
}
/* Media Query For Tablet */

/* Media Query For Tablet */
@media only screen and (min-width: 1200px) {
  #livechat{
    display: none;
  }
}
/* Media Query For Tablet */

</style>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand" id="brand">
          <a href="#hero"><h1><span>L</span>ive <span>C</span>hat</h1></a>
        </div>
        <div class="nav-list" style="font-family: Arial, Helvetica, sans-serif;">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
          <h1 style="font-size: 50px;color:white" id="livechat"><span style="color: crimson;">L</span>ive <span style="color: crimson;">C</span>hat</h1></a>
            <li><a href="index.php" data-after="Home"><span style="color:crimson">Home</span></a></li>
            <li><a href="SignUp.php" data-after="SignUp">SignUp</a></li>
            <li><a href="login.php" data-after="Login">Login</a></li>
            <li><a href="about.php" data-after="About">About</a></li>
            <li><a href="contact.php" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Welcome <span></span></h1>
        <h1>To <span></span></h1>
        <h1>LiveChat <span></span></h1>
        <a href="about.php" type="button" class="cta">More Info</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->
  <script src="javascript/app.js"></script>



</body>
</html>