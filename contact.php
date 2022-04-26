<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styleEmaill.css">
<style>
    #submit{
  background-color:#333;
  font-size:18px;

}
  #submit:hover{
  background-color: rgb(44, 44, 44);
}
.wrapper form .field label {
    position: absolute;
    top: 50%;
    left: 48px;
    color: #999999;
    font-weight: 400;
    font-size: 17px;
    pointer-events: none;
    transform: translateY(-50%);
    transition: all 0.3s ease;
}
.wrapper form .message label {
    position: absolute;
    top: 22%;
    left: 48px;
    color: #999999;
    font-weight: 400;
    font-size: 17px;
    pointer-events: none;
    transform: translateY(-50%);
    transition: all 0.3s ease;
}
form .field input:invalid:focus~label,
.wrapper form .message :invalid:focus~label{
    top: 0%;
    font-size: 16px;
    color: rgb(255, 52, 52);
    transform: translateY(-90%);
    background: rgba(255, 255, 255, 0.01);
}
form .field input:valid~label,
.wrapper form .message :valid~label {
    top: 0%;
    font-size: 16px;
    color: lightseagreen;
    transform: translateY(-90%);
    background: rgba(255, 255, 255, 0.01);
}
form .field input:invalid:focus,
.wrapper form .message :invalid:focus {
    border:1px solid;
    border-color: rgb(255, 52, 52);
    padding-left:35px;
}

form .field input:valid,
.wrapper form .message :valid {
  border:1px solid lightseagreen; 
  padding-left:35px;
}
.field input:invalid:focus~i,
.message textarea:invalid:focus~i {
    color: #ccc;
}
.field input:valid:focus~i,
.message textarea:valid:focus~i {
    color: #ccc;
}
.wrapper{
  position: absolute;
  min-width: 45%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.wrapper form .message textarea{
  max-height: 130px;
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<link rel="stylesheet" href="style.css">
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
            <li><a href="login.php" data-after="Login">Login</a></li>
            <li><a href="about.php" data-after="About">About</a></li>
            <li><a href="contact.php" data-after="Contact"><span style="color:crimson">Contact</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
  <script src="javascript/app.js"></script>

    <div class="wrapper">
        <header style="color:white;font-size: 25px;font-weight: 600;border:none;text-align:center">Send Email</header>
        <hr width=89% style="margin-left:5%" size="2"> 
        <form action="#">


            <div class="message">
                <textarea  name="message" required></textarea>
                <label style="left: 34px;">Write your message</label>
                <i class="material-icons" style="left:11px;">message</i>
            </div>
            <div class="button-area">
                <button type="submit" id="submit">Send Message</button>
                <span></span>
            </div>
        </form>
    </div>
</body>
<script src="javascript/email2.js"></script>

<style>
    .wrapper{
        position: absolute;
        max-width: 90%;
        max-height: 100%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    body {
    background-image: url(./img/croped.png);
    background-size: cover;
    background-position: top center;
    }
</style>

</html>