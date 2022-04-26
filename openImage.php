<link rel="stylesheet" href="stylesetting.css">
  <?php include_once "header.php"; ?>
  <link rel="stylesheet" href="stylewrapper.css">

<?php 
  session_start();
  include_once "php/open_image.php";
?>

<body>
<div class="wrapper">
    <section class="form setting">
    <header><a href="openprof.php<?php echo "?user_id=$user_id"?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;&nbsp;<span style="color: black;"><?php echo $row['username']; ?></span></header>
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
        <img src="php/images/<?php echo $row['img']; ?>" alt="" class="img" width="350px" height="350px">
        </form>
    </section>
</div>
</body>
<style>
.wrapper{
  width: 500px;
  height: 520px;
  max-width: 450px;
  width: 100%;
  font-size: 17px;
  min-width: 50%;
}
img.img{
  position: relative;
  top: 55%;
  left: 50%;
  transform: translate(-50%, 7%);
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
    img{
      width: 300px;
      height: 300px;
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
    img{
      width: 250px;
      height: 250px;
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
</style>
