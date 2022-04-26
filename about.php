<style>

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
            <li><a href="login.php" data-after="Login">Login</a></li>
            <li><a href="about.php" data-after="About"><span style="color:crimson">About</span></a></li>
            <li><a href="contact.php" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

    <!-- About Section -->
    <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img" style="border-color: crimson;">
          <img src="./img/image1.jpeg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title"><span style="color: white;">About</span> <span>LiveChat</span></h1>
        <h2>Front End Developer</h2>
        <p><span style="color: crimson;">LiveChat</span>, a program developed by B.Y, is dedicated to chatting and meeting new people, by register via e-mail.</p>
            <a download='LiveChat.txt' href='Download/LiveChat.txt' class='cta'>Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->
  <script src="javascript/app.js"></script>