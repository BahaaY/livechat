<link rel="stylesheet" href="stylewrapper.css">
<link rel="stylesheet" href="stylesetting.css">
<?php 
$error = array();
  session_start();
  include_once "header.php"; 
  include_once "php/uploads.php";
  include_once "php/about.php";
  include_once "php/removeprof.php";
?>
<style>
.wrapper{
  max-width: 450px;
  width: 100%;

  font-size: 17px;
  min-width: 50%;
}
img.img{
      position: relative;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -4%);
    }
    #submit:hover{
  background-color: rgb(44, 44, 44);
  transition: all 0.3s ease;
}
    #submit{
  transition: all 0.3s ease;
}
.wrapper .d{
  width: 100%;

    position: relative;

    display: flex;
    justify-content: space-between;
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
    #submit{
      width: 150px;
      font-size: 18px;
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
    #submit{
      width: 120px;
      font-size: 15px;
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
    #submit{
      width: 100px;
      font-size: 11px;
    }
}


  </style>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper ">
    <section class="form setting">

      <header><a href="setting.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;&nbsp;<span style="color: black;" id="header">Settings : Edit Profile</span></header>
      <?php 
		  	foreach ($error as $err) {
					echo "<p style='text-align:center;font-size:18px;font-weight:bold;'>$err.</p>";
				}
			?>
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
      <div><a href="openImageSetting.php"><img src="php/images/<?php echo $row['img']; ?>" alt="" class="img" width="150px" height="150px"></a></div>
      <div>
        <?php
        echo "<span style='font-weight:bold;'>UserName : </span ><span style='font-weight:bold;color:#206a5d;'>". $row['username']."</span><br>";
          echo "<span style='font-weight:bold;'>Status : </span><span style='font-weight:bold;color:#206a5d;'>". $row['About']."</span>";
        ?>
      </div>  
      <span class="txtabout">
          
        </span>
          <select name="select_about" class="select_about" style="width: 100%;">
            <option value="Available" >Available</option>
            <option value="Busy">Busy</option>
            <option value="At school">At school</option>
            <option value="At the movies">At the movies</option>
            <option value="At work">At work</option>
            <option value="Cant talk , LiveChat only">Can't talk,LiveChat only</option>
            <option value="In a meeting">In a meeting</option>
            <option value="At the gym">At the gym</option>
            <option value="Sleeping">Sleeping</option>
          </select>
          <input type="submit" name="save_about" class="save_about" value="Save Status" style="width: 100%;margin-top:15px;font-size:20px">
          <br>
          <div style="margin-top: 10px;">
          <span class="txtabout">
            Choose photo
          </span>
            <input type="file" name="file" id="file" accept="image/x-png,image/jpeg,image/jpg" class="upload_image" style="width: 100%;margin-top:5px;font-size:20px">
          </div>
          <div class="d">
          <div class="field button" >
          <input type="submit" id="submit" name="submit" value="Change photo" style="padding-left:10px;">
        </div>
        <div class="field button" style="padding-left:10px">
          <input type="submit" id="submit" name="rp" value="Remove photo" style="padding-left:10px;">
        </div>
          </div>
      </form>
    </section>
    </div>
</body>


