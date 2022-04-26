  <link rel="stylesheet" href="stylesetting.css">
  <?php include_once "header.php"; ?>
  <link rel="stylesheet" href="stylewrapper.css">

<?php 
  session_start();
  include_once "php/open_prof.php";
  $user_id=$_GET['user_id'];
?>
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
    .img{
      width:200px;
      height:200px;
    }
}
.wrapper{
        width: 500px;
        height: 520px;
    }
    img.img{
      position: relative;
        top: 55%;
        left: 50%;
        transform: translate(-50%, 7%);
    }
    .wrapper{
  max-width: 450px;
  width: 100%;
  font-size: 17px;
  min-width: 50%;
}

</style>
<body>
<div class="wrapper" >
    <section class="form setting">
        <header><a href="chat.php<?php echo "?user_id=$user_id"?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;&nbsp;<span style="color: black;"><?php echo $row['username']; ?></span></header>
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
        <a href="openImage.php<?php echo "?user_id=$user_id"?>"><img src="php/images/<?php echo $row["img"]; ?>" alt="" class="img" width="220px" height="220px"></a><br>
        <div style="text-align: center;padding-top: 25px;">
            <?php
                echo "<p style='color:#206a5d;font-size:19px;font-weight:bold;'><span style='color:black';>Gender : </span>". $row['Gender']."</p>";
                echo "<p style='color:#206a5d;font-size:19px;font-weight:bold;'><span style='color:black';>Status : </span>". $row['About']."</p>";
            ?>
        </div>  
        </form>
    </section>
</div>
</body>
