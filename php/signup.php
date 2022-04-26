<?php
    require "mail.php";
    include_once "config.php";
    $error = array();
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confpassword=mysqli_real_escape_string($conn, $_POST['confirmpassword']);
        if(isset($_POST['gender'])){
            $box_gender =mysqli_real_escape_string($conn, $_POST ['gender']);
        }
        $imgmale= "man.png";
        $imgfemale = "woman.png";
        if(!empty($username) && !empty($email) && !empty($password) && !empty($confpassword) && !empty($box_gender)){
            $res_sel=mysqli_query($conn,"Select * from users where username='{$username}'");
            if(mysqli_num_rows($res_sel) == 0){
                if(strlen($username) <=12){
                    if(strlen($password) >= 6){
                        $uppercase = preg_match('@[A-Z]@', $password);
                        $lowercase = preg_match('@[a-z]@', $password);
                        $number = preg_match('@[0-9]@', $password);
                        $special_char = preg_match('@[\W]@', $password);
                        if($uppercase && $lowercase && $number && $special_char){
                            if($confpassword==$password){
                                if(filter_var($email, FILTER_VALIDATE_EMAIL)){     
                                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' and verify='1'");
                                    if(mysqli_num_rows($sql) > 0){
                                        $error[]= "$email - This email already exist!";
                                    }else{
                                        $ran_id = rand(time(), 100000000);
                                        $status = "Offline now";
                                        $vkey=md5(time().$username);
                                        if($box_gender=='Male'){
                                                $gender="All";
                                            $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, username, email, password, img, status,Gender,About,vkey,verify,checkGender)
                                                    VALUES ({$ran_id}, '{$username}','{$email}', '{$password}', '{$imgmale}', '{$status}','$box_gender','Available','$vkey','0','$gender')");
                                        }else if($box_gender=='Female'){
                                            $gender="All";
                                            $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, username, email, password, img, status,Gender,About,vkey,verify,checkGender)
                                                VALUES ({$ran_id}, '{$username}', '{$email}', '{$password}', '{$imgfemale}', '{$status}','$box_gender','Available','$vkey','0','$gender')");
                                        }
                                        if($insert_query){
                                            send_mail($email,'Email verification',"<a href='http://localhost/LiveChat/php/verify.php?vkey=$vkey'>Verify your account</a>");
                                            header("location:thankyou.php");
                                        }else{
                                            $error[]= "Something went wrong. Please try again!";
                                        }
                                    }
                                }else{
                                    $error[]= "$email is not a valid email!";
                                }
                            }else{
                                $error[]= "$confpassword is not the same password!";
                            }
                        }else{
                            $error[]= "Password must be contain upercase,lowercase,number and special characters";
                        }
                    }else{
                        $error[]= "Password must be at least 6 characters ";
                    }
                }else{
                    $error[]= "Username must not be less than 12 characters ";
                }
            }else{
                $error[]= "$username - This username already exist!";
            }
        }else{
            $error[]= "All fields are required!";
        }
    }
?>