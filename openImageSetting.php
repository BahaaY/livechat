<link rel="stylesheet" href="stylesetting.css">
  <?php include_once "header.php"; ?>
  <?php include_once "php/config.php"; ?>
  <link rel="stylesheet" href="stylewrapper.css">

<?php 
  session_start();
  $query=" select * from users where unique_id = {$_SESSION['unique_id']}";
  $res=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($res);
?>

<body>
<div class="wrapper">
    <section class="form setting">
    <header><a href="edit_profile.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;&nbsp;<span style="color: black;">Profile</span></header>
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
        <img src="php/images/<?php echo $row['img']; ?>" alt="" class="img" width="430px" height="430px">
        </form>
    </section>
</div>
</body>
<style>
.wrapper{
  width: 500px;
  height: 584px;
  max-width: 450px;
  width: 100%;
  font-size: 17px;
  min-width: 50%;
}
img.img{
  position: relative;
  top: 55%;
  left: 50%;
  transform: translate(-50%, 3%);
}
@media only screen and (min-width: 1200px) {
  #livechat{
    display: none;
  }
}

@media only screen and (min-width: 768px) {
    div.wrapper{
      max-width: 700px;
      height: 590px;
    }
}

@media only screen and (max-width: 540px) {
    div.wrapper{
      max-width: 460px;
      height: 580px;
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
      height: 500px;
    }
    img{
      width: 350px;
      height: 350px;
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
      height: 450px;
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
      height: 390px;
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
      height: 330px;
    }
    .img{
      width:200px;
      height:200px;
    }

}
</style>
