<link rel="stylesheet" href="stylewrapper.css">
<?php 
  include_once "php/config.php";
?>
<?php 
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if(mysqli_num_rows($sql) > 0){
  $row = mysqli_fetch_assoc($sql);
}
?>
<?php
    if(isset($_POST['save_about'])){
        $about = $_POST['select_about'];
        if($about==$row['About']){
          $error[] = "<span style='color:red'>This status already exist! </span>";
        }else{
          $res = mysqli_query($conn, "UPDATE users SET About = '$about' WHERE unique_id= {$_SESSION['unique_id']}");
          if($res){
            $error[] = "<span style='color:green'>Profile updated</span>";
          }else{
            $error[] = "<span style='color:red'>Error exist</span>";
          }
        }
    }

?>