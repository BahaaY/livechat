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
    #file{
        font-size: 12px;
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
    #file{
        font-size: 9px;
      }
}
</style>
<script>
  function display(){
    document.getElementById('dsl').style.display="flex";
  }
</script>
<link rel="stylesheet" href="stylesetting.css">
<?php 
  $error=array();
  session_start();
  include_once "header.php"; 
  include_once "php/insert_image.php"; 
  include_once "php/config.php";
  
?>
<link rel="stylesheet" href="stylewrapper.css">

<body>
    <div class="wrapper ">
    <section class="form setting">
      <header><a href="chat.php?<?php echo 'user_id='.$_GET['user_id'].''?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;&nbsp;<span style="color: black;font-size:22px;">Send Image</span></header>
      <?php 
		  	foreach ($error as $err) {
					echo "<p style='text-align:center;font-size:18px;font-weight:bold;'>$err.</p>";
				}
			?>
      <form action="" method="POST" enctype="multipart/form-data" >
        <input type="file" id="file" name="fichier" onchange="display();" accept="image/x-png,image/jpeg,image/jpg,image/gif">
        <div class="d" id="dsl" style="display: none;">
          <div class="field button" >
            <input type="submit" id="submit" class="yes" value="Yes" name="yes" style="padding-right:40px">
          </div>
          <div class="field button"  style="padding-left:10px">
            <input type="submit" id="submit" name="no" class="no" value="No" style="padding-right:40px">
          </div>
        </div>
      </form>
    </div>
</body>
