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

  if(isset($_POST['submit'])){
    if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ""){
      if($_FILES['file']['type']=="image/jpeg" || $_FILES['file']['type']=="image/png" || $_FILES['file']['type']=="image/jpg"){
            $imgname=$_FILES['file']['name'];
            $folder="php/images";
            $id=$row['user_id'];
            $det=explode(".",$imgname);
            $ext=$det[count($det)-1];
            $filename="$folder/$id.$ext";
            $insert_name=$id.".".$ext;
            move_uploaded_file($_FILES['file']['tmp_name'],$filename);
            if(file_exists($filename)){
              $query=("UPDATE users SET img = '$insert_name' WHERE unique_id= {$_SESSION['unique_id']}");
              $result=mysqli_query($conn,$query);
              if($result){
                $error[] = " <span style='color:green'>Profile updated</span>";
              }else{
                $error[] = "<span style='color:red'>Error exist</span>";
              }
            }else{
              $error[] = "<span style='color:red'>Error exist</span>";
            }
      }else{
        $error[] = "<span style='color:red'>Only image - jpeg, png, jpg</span>";
      }
    }else{
      $error[] = "<span style='color:red'>Please upload an image file - jpeg, png, jpg</span>";
    }
  }
?>