
<link rel="stylesheet" href="stylewrapper.css">
<link rel="stylesheet" href="stylesetting.css">
<style>
  .wrapper{
    font-size: 17px;
    min-width: 50%;
  }
      #submit:hover{
  background-color: rgb(44, 44, 44);
  transition: all 0.3s ease;
}
    #submit{
  transition: all 0.3s ease;
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
<?php 
  session_start();
  $error = array();
  include_once "header.php"; 
  include_once "php/change_pass.php";
?>
<body>
    <div class="wrapper ">
    <section class="form setting">

      <header><a href="setting.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;&nbsp;<span style="color: black;font-size:22px;">Settings : Change Password</span></header>
          <?php 
		  	foreach ($error as $err) {
					echo "<p style='text-align:center;font-size:18px;font-weight:bold;'>$err.</p>";
				}
			?>
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
      <div class="field input" style="top:15px">
        <div class="fas fa-key" id="ic" ></div>
          <input type="text" name="current_password" required style="color: black;">
          <label>Current password</label>
        </div>
      <div class="field input" style="top:20px">
        <div class="fas fa-key" id="ic" ></div>
          <input type="password" name="new_password" required style="color: black;">
          <label>New password</label>
          <i class="fas fa-eye" ></i>
        </div>
        <div class="field input" style="top:25px">
        <div class="fas fa-key" id="ic" ></div>
          <input type="password" name="Retype_new_password" required style="color: black;">
          <label>Retype new password</label>
        </div>
        <input type="submit" id="submit" name="save_change_pass" class="save_change_pass" value="Update Password"  style="margin-top: 45px;font-size:20px">
      </form>
      <script src="javascript/pass-show-hide.js"></script>
    </div>
</body>
