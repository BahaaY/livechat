
<style>
.wrapper{
  position: absolute;
  font-size: 17px;
  min-width: 37.5%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
    .yy:hover,.nn:hover,a:hover{
  background-color: rgb(44, 44, 44);
  transition: all 0.3s ease;
}
    .yy,.nn,a{
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
  <link rel="stylesheet" href="stylesetting.css">
<?php 
  session_start();
  include_once "php/config.php";
  include_once "header.php"; 
?>

<link rel="stylesheet" href="stylewrapper.css">
<?php 
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if(mysqli_num_rows($sql) > 0){
  $row = mysqli_fetch_assoc($sql);
}
?>
<body>
    <div class="wrapper ">
    <section class="form setting">
      <header><span style="color: black;">Settings : Logout</span></header>
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
      <div class="all">
        <div class="yy">
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" style="color:white" >Yes</span></a>
        </div>
        <div class="nn">
        <a href="setting.php"   style="color:white">No</span></a>
        </div>
      </div>

        
      </form>
    </div>
</body>
<style>
    .all{
      width: 100%;
    position: relative;
    color: white;
    display: flex;
    justify-content: space-between;
    }
    .yy,.nn{
      position: relative;
    width: 100%;
    padding-top: 5px;
    text-align: center;
    margin-right: 10px;
    height: 45px;
    border: none;
    color: #fff;
    font-size: 20px;
    background: #333;
    border-radius: 5px;
    cursor: pointer;
    }


</style>
