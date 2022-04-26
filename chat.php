<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<link rel="stylesheet" href="stylenavbar22.css">
<link rel="stylesheet" href="stylewrapper.css">
<link rel="stylesheet" href="style.css">
<style>
  .wrapper{
    font-size: 17px;
    min-width: 50%;
  }
  .del{
      width: 100%;
    position: relative;
    color: white;
    display: none;
    justify-content: space-between;
    }
    .yy,.nn{
      position: relative;
    width: 70%;
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
    .objectEmoji{
      display: none;
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
    .carEmoji{
      display: none;
    }
    .objectEmoji{
      display: none;
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
    .carEmoji{
      display: none;
    }
    .objectEmoji{
      display: none;
    }
}
  </style>

  <script>
      function sendImage() {
        //var name=document.getElementById('file').files[0].name;
        var user_id=document.getElementById('incoming_id').value;
        //self.location="send_image.php?user_id="+user_id+"&name="+name;
        self.location="send_image.php?user_id="+user_id;
  }
  </script>
<body>
<section id="services">
    <div class="services container">
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php
          $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
          if(mysqli_num_rows($sql1) > 0){
          $row1 = mysqli_fetch_assoc($sql1);
          }
          if($row1['checkGender']=="Male"){
            $gender="Male";
          }else if($row1['checkGender']=="Female"){
            $gender="Female";
          }else if($row1['checkGender']=="All"){
            $gender="All";
          }
          
        ?>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php?gender=$gender");
          }
        ?>

        <a href="users.php?gender=<?php echo $gender?>" class="back-icon" ><i class="fas fa-arrow-left" ></i></a>
        <a href="openprof.php<?php echo "?user_id=$user_id"?>" style="position: relative;top:5px;"><img src="php/images/<?php echo $row['img']; ?>" alt=""></a>
        <div class="details">
          <span style="font-size:18px;"><?php echo $row['username'] ?></span>
          <br>
          <span style="position: relative;">
          <?php
            if($row['status']=='Active now'){
              echo "<span style='color:green;font-size:16px';>".$row['status']."</span>";
            }else if($row['status']=='Offline now'){
              $gettime=$row['SignUp_Time'];
              $day=date('D',strtotime($gettime));
              $time=date('h:i a',strtotime($gettime));
              echo "<span style='color:red;font-size:17px'>Last seen ".$day." at ".$time."</span>";
            }
          ?>
          </span>
        </div>
      </header>

      <div class="chat-box">

      </div>

      <form action="#" class="typing-area" method="POST" enctype="multipart/form-data">
        <input type="text" class="incoming_id" id="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <i class="far fa-smile" onclick="openEmoji();" id="open"></i>
        <i class='fas fa-window-close fa-lg' onclick="closeEmoji();" id="close"></i>

        <label class="fa fa-paperclip" aria-hidden="true" for="file" onclick="sendImage();"  style="margin-left: 15px;padding-bottom:15px;" id="fa_delete"></label>

        <input type="text" id="message" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button id="btn"><i class="fab fa-telegram-plane"></i></button>
      </form>
      
      <div class="ListEmoji" id="ListEmoji">

        <div class="allHeader">
          <div class="peopleEmoji"  id="peopleEmoji" onclick="openPeopleEmoji()">
            <i class="fas fa-smile" onclick="openPeopleEmoji()"style="font-size: 30px;padding-top:9px;padding-left:8px;"></i>
            <i class="fas fa-smile" onclick="ClosePeopleEmoji()" style="display: none;"></i>
          </div>
          <div class="animalEmoji" id="animalEmoji" onclick="openAnimalEmoji()">
            <i class="fas fa-frog" style="font-size: 30px;padding-top:9px;padding-right:20px" onclick="openAnimalEmoji()"></i>
            <i class="fas fa-frog" onclick="CloseAnimalEmoji()" style="display: none;"></i>
          </div>
          <div class="drinkEmoji" id="drinkEmoji" onclick="openDrinkEmoji()">
            <i class="fas fa-cocktail " style="font-size: 28px;padding-top:9px;padding-right:20px" onclick="openDrinkEmoji()"></i>
            <i class="fas fa-cocktail " onclick="CloseDrinkEmoji()" style="display: none;"></i>
          </div>
          <div class="carEmoji" id="carEmoji" onclick="openCarEmoji()">
            <i class="fa fa-car " style="font-size: 28px;padding-top:9px;padding-right:20px" onclick="openDrinkEmoji()"></i>
            <i class="fa fa-car " onclick="CloseCarEmoji()" style="display: none;"></i>
          </div>
          <div class="objectEmoji" id="objectEmoji" onclick="openObjectEmoji()">
            <i class="fas fa-lightbulb " style="font-size: 28px;padding-top:9px;padding-right:20px" onclick="openObjectEmoji()"></i>
            <i class="fas fa-lightbulb " onclick="CloseObjectEmoji()" style="display: none;"></i>
          </div>
        </div>
        <div class="EmojiPeople" id="EmojiPeople" >
          <?php include "All_Emoji/People.php"?>
        </div>
        <div class="EmojiAnimal" id="EmojiAnimal">
          <?php include "All_Emoji/Animals.php"?>
        </div>
        <div class="EmojiDrink" id="EmojiDrink">
          <?php include "All_Emoji/Drink.php"?>
        </div>
        <div class="EmojiCar" id="EmojiCar">
          <?php include "All_Emoji/Car.php"?>
        </div>
        <div class="EmojiObject" id="EmojiObject">
          <?php include "All_Emoji/Object.php"?>
        </div>
      </div>
      </div>
      </div>
    </section>



  <script src="javascript/chat.js"></script>
  <script src="javascript/navbar4.js"></script>


  </div>
  </section>
</body>

</html>
