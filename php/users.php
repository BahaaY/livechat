<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "<div class='user'>Please choose an people to start chat</div>";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>
<style>
    .user{
        font-size:40px;
        padding-top:295px;
        text-align:center;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

</style>