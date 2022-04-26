


<?php 
  session_start();
  include_once "php/config.php";
?>
<?php 
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if(mysqli_num_rows($sql) > 0){
  $row = mysqli_fetch_assoc($sql);
}
?>



<link rel="stylesheet" href="style.css">
<?php include_once "header.php"; ?>
<link rel="stylesheet" href="stylewrapper.css">

<style>
  .wrapper{
    font-size: 17px;
    min-width: 50%;
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
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
      width: 240px;
    }
}

  </style>
<body>
    <div class="wrapper ">
    <section class="form setting">
      <header>
        <?php
          if($row['checkGender']=="Male"){
            $gender="Male";
          }else if($row['checkGender']=="Female"){
            $gender="Female";
          }else if($row['checkGender']=="All"){
            $gender="All";
          }
        ?>
        <a href="users.php?gender=<?php echo $gender?>" class="back-icon">
          <i class="fas fa-arrow-left"></i>
        </a>
        &nbsp;&nbsp;&nbsp;<span style="color: black;">Settings</span>
        <i class="fa fa-trash-o" aria-hidden="true"></i>
      </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="item-setting">
            <div class="logout">
              <div class="fas fa-user-circle"></div>
              <a href="edit_profile.php">&nbsp;Edit Profile</a>
            </div>
            <div class="logout">
              <div class="fas fa-user-shield"></div>
              <a href="changePass.php">Change Password</a>
            </div>
            <div class="logout">
              <div class="fas fa-user-slash"></div>
              <a href="deleteAcc.php">Delete Account</a>
            </div>
            <div class="logout">
              <div class="fas fa-power-off"></div>
              <a href="Log_out.php" >&nbsp;&nbsp;Logout</a>
            </div>
          </div>
      </form>
    </section>
    </div>
</body>