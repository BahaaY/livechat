
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
  $error=array();
  session_start();
  include_once "header.php"; 
  include_once "php/delete_acc.php";

?>
<body>
    <div class="wrapper ">
    <section class="form setting">

      <header><a href="setting.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;&nbsp;<span style="color: black;">Settings : Delete Account</span></header>
          <?php 
		  	foreach ($error as $err) {
					echo "<p style='text-align:center;font-size:18px;font-weight:bold;'>$err.</p>";
				}
			?>
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
      <div class="field input" style="top:15px">
        <div class="fas fa-envelope" id="ic" ></div>
          <input type="text" name="email" required style="color: black;">
          <label>Email Address</label>
        </div>
      <div class="field input" style="top:20px">
        <div class="fas fa-key" id="ic" ></div>
          <input type="password" name="password" required style="color: black;" >
          <label>Password</label>
          <i class="fas fa-eye" ></i>
        </div>
        <input type="submit" id="submit" name="delete_acc" class="delete_acc" value="Delete Account" style="margin-top: 40px;font-size:20px">
      </form>
      <script src="javascript/pass-show-hide.js"></script>
    </div>
</body>
