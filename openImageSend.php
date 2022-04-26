<link rel="stylesheet" href="stylesetting.css">
  <?php include_once "header.php"; ?>
  <?php include_once "php/config.php"; ?>
  <link rel="stylesheet" href="stylewrapper.css">

<?php 
  session_start();
  $userid=$_GET['user_id'];
  $msgid=$_GET['msg_id'];
  $query=" select * from messages";
  $res=mysqli_query($conn,$query);
  while($row=mysqli_fetch_assoc($res)){
    if($msgid==md5($row['msg_id'])){
      $MsgId=$row['msg_id'];
    }
  }
  $query2=mysqli_query($conn," select * from messages where msg_id='$MsgId' and (incoming_msg_id=$userid or outgoing_msg_id=$userid)");
  $rec=mysqli_fetch_assoc($query2);

  $query3=mysqli_query($conn," select * from users where unique_id=$userid");
  $row2=mysqli_fetch_assoc($query3);
?>

<body>
<div class="wrapper">
    <section class="form setting">
    <header><a href="chat.php?user_id=<?php echo $userid?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;&nbsp;<span style="color: black;"><?php echo $row2['username']; ?></span></header>
        <div id="link"><a download="<?php echo $rec['image_send']; ?>" href="php/images/<?php echo $rec['image_send']; ?>">Download</a></div>
    <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
        <img src="php/images/<?php echo $rec['image_send']; ?>" alt="" class="img" width="430px" height="540px">
        </form>
    </section>
</div>
</body>
<style>
    a{
    color: rgb(255, 52, 52);
    }
    a:hover {
        text-decoration: underline;
        color: red;
    }
    #link{
        position: relative;
    top: 50%;
    left: 50%;
  transform: translate(-10%, 10%);
  font-size: 20px;
    }
.wrapper{
  width: 500px;
  height: 680px;
  max-width: 450px;
  width: 100%;
  font-size: 17px;
  min-width: 50%;
}
img.img{
  position: relative;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -2%);
  border-radius: 0px;
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
    img{
      width: 660px;
      height: 545px;
    }
    #link{
        position: relative;
    top: 50%;
    left: 50%;
  transform: translate(-5%, 10%);
  font-size: 20px;
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
      height: 680px;
    }
    img{
      width: 360px;
      height: 545px;
    }
    img.img{
        position: relative;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -2%);
        border-radius: 0px;
    }
    #link{
        position: relative;
    top: 50%;
    left: 50%;
  transform: translate(-14%, 10%);
  font-size: 20px;
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
      width: 320px;
      height: 550px;
    }
    img.img{
        position: relative;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -2%);
        border-radius: 0px;
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
      width: 260px;
      height: 550px;
    }
    img.img{
        position: relative;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -2%);
        border-radius: 0px;
    }
    #link{
        position: relative;
    top: 50%;
    left: 50%;
  transform: translate(-20%, 10%);
  font-size: 20px;
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
      height:550px;
    }
    #link{
        position: relative;
    top: 50%;
    left: 50%;
  transform: translate(-30%, 10%);
  font-size: 20px;
    }

}
</style>
