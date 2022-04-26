
<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                echo "<div class=prog>";
                    session_unset();
                    session_destroy();
                    //header("location: ../login.php");
                    echo '<meta http-equiv="refresh" content="2;url=../login.php">';
                    echo '<progress max=100 style="height:30px"><strong>Progress: 60% done.</strong></progress><br>';
                    echo '<span style="font-size:17px">Logged out please wait !...</span>';
                echo "</div>";
            }
        }else{
            header("location: ../users.php");
        }
    }else{  
        header("location: ../login.php");
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



