<?php 
$error = array();
    //session_start();
    if(isset($_POST['submit'])){
        include_once "config.php";
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        if(!empty($email) && !empty($password)){
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' and verify='1'");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                $user_pass = $password;
                $enc_pass = $row['password'];
                if(isset($_POST['remember'])){
                    $bxEmail=$email;
                    $bxPass=$password;
                    setcookie('LiveChatEmail',$bxEmail,time()+5184000,"/"); //2 months
                    setcookie('LiveChatPassword',$bxPass,time()+5184000,"/"); 
                }
                if($user_pass === $enc_pass){
                    $status = "Active now";
                      $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                    
                    if($sql2){
                            $_SESSION['unique_id'] = $row['unique_id'];
                            $error[] = "success";
                            if($row['checkGender']=="Male"){
                                $gender="Male";
                              }else if($row['checkGender']=="Female"){
                                $gender="Female";
                              }else if($row['checkGender']=="All"){
                                $gender="All";
                            }
                            header("location:users.php?gender=$gender");
                    }else{
                        $error[] = "Something went wrong. Please try again!";
                    }
                }else{
                    $error[] = "Email or Password is Incorrect!";
                }
            }else{
                    $error[] = "$email - This email not Exist!";
            }
        }else{
            $error[] = "All input fields are required!";
        }
    }
?>