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
  if(isset($_POST['save_change_pass'])){
    $currentpass=$_POST['current_password'];
    $newpass=$_POST['new_password'];
    $retypenewpass=$_POST['Retype_new_password'];
    if($currentpass==$row['password']){
        if(strlen($newpass) >= 6){
            $uppercase = preg_match('@[A-Z]@', $newpass);
            $lowercase = preg_match('@[a-z]@', $newpass);
            $number = preg_match('@[0-9]@', $newpass);
            $special_char = preg_match('@[\W]@', $newpass);
            if($uppercase && $lowercase && $number && $special_char){
                if($newpass==$retypenewpass){
                    if($newpass!=$row['password']){
                        $query=("UPDATE users SET password = '$newpass' WHERE unique_id= {$_SESSION['unique_id']}");
                        $result=mysqli_query($conn,$query);
                        if($result){
                            unset($_COOKIE['LiveChatEmail']); 
                            unset($_COOKIE['LiveChatPassword']); 
                            setcookie('LiveChatEmail', null, -1, '/');
                            setcookie('LiveChatPassword', null, -1, '/'); 
                            $error[] =  "<span style='color:green'>Password updated</span>";
                        }
                    }else{
                        $error[] =  "<span style='color:red'>$newpass is already your password!</span>";
                    }
                }else{
                    $error[] =  "<span style='color:red'>$retypenewpass is not the same password!</span>";
                }
            }else{
                $error[] =  "<span style='color:red'>Password must be contain upercase,lowercase,number and special characters</span>";
            }
        }else{
            $error[] =  "<span style='color:red'>Password must be at least 6 characters </span>";
        }
    }else{
        $error[] =  "<span style='color:red'>Your current password is incorrect </span>";
    }


}
?>