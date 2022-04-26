


<style>
  .wrapper{
    font-size: 17px;
    min-width: 50%;
  }
  .wrapper .d{
  width: 100%;

    position: relative;
    display: flex;
    justify-content: space-between;
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
      width: 220px;
    }
    #submit{
      width: 90px;
    }
}
  </style>


<link rel="stylesheet" href="stylesetting.css">
<?php 
  session_start();

  include_once "header.php"; 
  include_once "php/delete_msg.php";
?>
<link rel="stylesheet" href="stylewrapper.css">


<body>
    <div class="wrapper ">
    <section class="form setting">
      <header><h4 style="color: black;text-align:center">Delete Message</h4></header>
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
      <div class="d">
          <div class="field button" >
          <input type="submit" id="submit" class="yes" value="Yes" name=yes style="padding-right:40px">
        </div>
        <div class="field button" style="padding-left:10px">
        <input type="submit" id="submit" name="no" class="no" value="No" style="padding-right:40px">
        </div>
          </div>
        
        
      </form>
      <script src="javascript/pass-show-hide.js"></script>
    </div>
</body>
