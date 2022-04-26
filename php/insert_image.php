<?php 
    include_once "php/config.php";
    if(isset($_SESSION['unique_id'])){
        $inc=$_SESSION['unique_id'];
        $user_id=$_GET['user_id'];
        if(isset($_POST['yes'])){
            if(isset($_FILES['fichier']['name']) && $_FILES['fichier']['name'] != ""){
                if($_FILES['fichier']['type']=="image/jpeg" || $_FILES['fichier']['type']=="image/png" || $_FILES['fichier']['type']=="image/jpg" || $_FILES['fichier']['type']=="image/gif"){
                    $sql = mysqli_query($conn, "INSERT INTO messages (	incoming_msg_id, outgoing_msg_id, image)
                        VALUES ('{$user_id}', '{$inc}','Image')") or die();
                    $imgname=$_FILES['fichier']['name'];
                    $folder="php/images";
                    $id=md5(mysqli_insert_id($conn));
                    $det=explode(".",$imgname);
                    $ext=$det[count($det)-1];
                    $filename="$folder/LiveChat_$id.$ext";
                    $insert_name="LiveChat_".$id.".".$ext;
                    copy($_FILES['fichier']['tmp_name'],$filename);
                    $sel_id=mysqli_query($conn,"select * from messages");
                    while($rec_id=mysqli_fetch_assoc($sel_id)){
                      if($id==md5($rec_id['msg_id'])){
                        $msg_id=$rec_id['msg_id'];
                      }
                    }
                    if(file_exists($filename)){
                        $sql2 = mysqli_query($conn, "update messages set image_send = '{$insert_name}' where msg_id=$msg_id") or die();
                        if($sql2){
                            header("location: chat.php?user_id=$user_id");
                        }else{
                            $error[] = "<span style='color:red'>Error exist</span>";
                        }
                    }else{
                        $error[] = "<span style='color:red'>Error exist</span>";
                    }
                }else{
                    $error[] = "<span style='color:red'>Only image - jpeg, png, jpg, gif</span>";
                }
            }else{
                $error[] = "<span style='color:red'>Please upload an image file - jpeg, png, jpg, gif</span>";
            }
        }elseif(isset($_POST['no'])){
            header("location: chat.php?user_id=$user_id");
        }
    }else{
        header("location: ../login.php");
    }

?>