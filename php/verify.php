<?php
    session_start();
    include_once "config.php";
    if(isset($_GET['vkey'])){
        $vkey=$_GET['vkey'];
        $select="select * from users where vkey='$vkey' ";
        $res=mysqli_query($conn,$select);
        if($res){
                $update="update users set verify='1' where vkey='$vkey'";
                $res_update=mysqli_query($conn,$update);
                if($res_update){
                    echo "<h2 align=center>Your account has been verified. You can now LogIn<br><a href='http://localhost/LiveChat/login.php'>Login</a></h2>";
                }
        }else{
            echo "Account invalid ";
        }
    }else
        echo "Error exist";
?>