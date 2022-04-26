<?php
  include_once "php/config.php";
    if(isset($_POST['yes'])){
      $user_id=$_GET['user_id'];
      $Msg_id=$_GET['msg_id'];
      $message="This message was deleted";
      $sel_id=mysqli_query($conn,"select * from messages");
      while($rec_id=mysqli_fetch_assoc($sel_id)){
        if($Msg_id==md5($rec_id['msg_id'])){
          $msg_id=$rec_id['msg_id'];
        }else{
          header("location: chat.php?user_id=$user_id");
        }
      }
      
      $sel=mysqli_query($conn,"select * from messages where msg_id=$msg_id");
      $rec=mysqli_fetch_assoc($sel);
      if($rec['image_send']!=NULL){
        $image=$rec['image_send']; 
        unlink("php/images/".$image);
        $query=("UPDATE messages set image_send='$message' where msg_id= $msg_id");
        $result=mysqli_query($conn,$query);
        if($result){
            header("location: chat.php?user_id=$user_id");
        }
      }else{
        $query=("UPDATE messages set msg='$message' where msg_id= $msg_id");
        $result=mysqli_query($conn,$query);
        if($result){
            header("location: chat.php?user_id=$user_id");
        }
      }
  }
  if(isset($_POST['no'])){
    $user_id=$_GET['user_id'];
    header("location: chat.php?user_id=$user_id");
  }


?>