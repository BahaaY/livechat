<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
}
?>
<?php include_once "header.php"; ?>
<link rel="stylesheet" href="stylewrapper.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="stylenavbar22.css">
<style>
.wrapper{
  max-width: 450px;
  width: 100%;
  height: 675px;
  font-size: 17px;
  min-width: 50%;
}
.wrapper .gender{
  text-align: center;
  margin: 20px 0;
    position: relative;
    align-items: center;
    justify-content: space-between;
    font-size: 18px;
}
.gender .span1{
  padding-right: 10%;
}
.gender .span2{
  padding-right: 10%;
}
.ChatPeople{
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -25%);
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
<script>
  function change(gender){
    window.location.href='users.php?gender='+gender;
  }
</script>
<body>

<section id="services">
    <div class="services container">
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <a href="edit_profile.php"><img src="php/images/<?php echo $row['img']; ?>" alt=""></a>
          <div class="details">
            <span style="color:black;"><?php echo $row['username']?></span>
            <br>
            <span style="font-weight: normal;font-size:15px;color:black"><?php echo $row['About']; ?></span>
          </div>
        </div>
        <?php
          if($row['status']=='Active now'){
             echo "<span style='color:green;font-size:16px'>".$row['status']."</span>";
          }else if($row['status']=='Offline now'){
            echo "<span style='color:red;font-size:16px'>".$row['status']."</span>";
          }
        ?>
        <a href="setting.php" class="fas fa-cogs" style="padding-right: 15px;"></a>
      </header>


      <div class="bar">
        <div class="chat" id="chat" onclick="openNav()">
          Chat
        </div>
        <div class="people" id="people" onclick="openNavpeople()">
        People
        </div>
        <div class="divclosebtn" style="position:absolute;left:90px;top:40px;font-size: 30px;">
          <a href="javascript:void(0)" class="closebtnchat" onclick="closeNav()">&times;</a>
        </div>
        <div id="mySidenavchat" class="sidenav" style="padding-top: 0px;">
          <div class="search">
          <span class="text">Search an user to start chat</span>
          <input type="text" placeholder="Enter name to search...">
          <button><i class="fas fa-search"></i></button>
          </div>
          <div class="users-list">

          </div>
        </div>
        
        <div style="position:absolute;right:90px;top:40px;font-size: 30px;">
          <a href="javascript:void(0)" class="closebtnpeople" onclick="closeNavpeople()">&times;</a>
        </div>
        <div id="mySidenavpeople" class="sidenavpeople" >
        <div class="gender" >
          <?php
            if($_GET['gender']=="Male" ){
              $checkMale='checked';
              $checkFemale='';
              $checkAll='';
            }else if($_GET['gender']=="Female" ){
              $checkMale='';
              $checkFemale='checked';
              $checkAll='';
            }else if($_GET['gender']=="All" ){
              $checkMale='';
              $checkFemale='';
              $checkAll='checked';
            }
          ?>
          <span class="span1"><input type="radio" name="gender" value="Male" <?php echo $checkMale?> onchange="change('Male');">Male</span>
          <span class="span2"><input type="radio" name="gender" value="Female" <?php echo $checkFemale?> onchange="change('Female');">Female</span>
          <span class="span3"><input type="radio" name="gender" value="All" <?php echo $checkAll?> onchange="change('All');">Male & Female</span>
          <?php
            $gender=$_GET['gender'];
            if($gender=="Male" || $gender=="Female" || $gender=="All"){
              $query1="update users set checkGender='$gender' WHERE unique_id = {$_SESSION['unique_id']}";
              $res1=mysqli_query($conn,$query1);
            }else{
              if($row['Gender']=="Male" || $row['Gender']=="Female"){
                $gender="All";
              }
              header("location:users.php?gender=$gender");
            }
            
            
          ?>
          
          </div>
          
          <div class="people-list" id="people_list"> 

          </div>
        </div>
        <div class="ChatPeople">
          Click on <span class="spanchat">Chat</span> or <span class="spanpeople">People</span> 
        </div>
      </div>

      

    </section>
  </div>

  <script src="javascript/users.js"></script>
  <script src="javascript/peopleee.js"></script>
  <script src="javascript/users.js"></script>
  <script src="javascript/navbar4.js"></script>

  </div>
  </section>
</body>
</html>
