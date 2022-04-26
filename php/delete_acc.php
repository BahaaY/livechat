<link rel="stylesheet" href="stylewrapper.css">
<?php
 include_once "header.php"; 
 include_once "php/config.php";
?>
<?php 
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if(mysqli_num_rows($sql) > 0){
  $row = mysqli_fetch_assoc($sql);
}
?>
<?php
  if(isset($_POST['delete_acc'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
        if($email==$row['email'] && $pass==$row['password']){
            $query=("DELETE from users WHERE unique_id= {$_SESSION['unique_id']}");
            $result=mysqli_query($conn,$query);
            if($result){
              if (isset($_COOKIE['LiveChatEmail']) && isset($_COOKIE['LiveChatPassword'])) {
                unset($_COOKIE['LiveChatEmail']); 
                unset($_COOKIE['LiveChatPassword']); 
                setcookie('LiveChatEmail', null, -1, '/');
                setcookie('LiveChatPassword', null, -1, '/'); 
              }
              echo "<div class=prog>";
                session_unset();
                session_destroy();
                echo '<meta http-equiv="refresh" content="2;url=SignUp.php">';
                echo '<progress max=100 style="height:30px"><strong>Progress: 60% done.</strong></progress><br>';
                echo '<span style="font-size:17px">Deleting account Please wait !...</span>';
              echo "</div>";
            }
        }else{
          $error[] = "<span style='color:red'>Email or password not Exist!</span>";
        }
}
?>
<style>
    .prog{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width:200px;
    }
</style>