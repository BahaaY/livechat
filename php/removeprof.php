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

    $imgmale= "man.png";
    $imgfemale = "woman.png";
    $getGender=$row['Gender'];
    if(isset($_POST['rp'])){
        if($getGender=='Male'){
          if($row['img']==$imgmale){
            $error[] = "<span style='color:red'>No Image exist </span>";
          }else{
            $image=$row['img']; 
            unlink("php/images/".$image);
            $res = mysqli_query($conn, "UPDATE users SET img = '$imgmale' WHERE unique_id= {$_SESSION['unique_id']}");
            if($res){
              $error[] = "<span style='color:green'>Profile updated</span>";
              header("location:edit_profile.php");
            }else{
              $error[] = "<span style='color:red'>Error exist</span>";
            }
          }
        }else if($getGender=='Female'){
          if($row['img']==$imgfemale){
            $error[] = "<span style='color:red'>No Image exist </span>";
          }else{
            $image=$row['img']; 
            unlink("php/images/".$image);
            $res = mysqli_query($conn, "UPDATE users SET img = '$imgfemale' WHERE unique_id= {$_SESSION['unique_id']}");
            if($res){
              $error[] = "<span style='color:green'>Profile updated</span>";
              header("location:edit_profile.php");
            }else{
              $error[] = "<span style='color:red'>Error exist</span>";
            }
        }
      }
    }
?>