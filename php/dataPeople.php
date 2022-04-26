<?php
    $sqlSelectGender = "SELECT * FROM users WHERE  unique_id = {$_SESSION['unique_id']} ";
    $queryGender = mysqli_query($conn, $sqlSelectGender);
    $rowGender=mysqli_fetch_assoc($queryGender);
    $gender=$rowGender['checkGender'];
    if($gender=="Male" || $gender=="Female"){
        $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} and Gender='$gender' ORDER BY user_id DESC";
    }elseif($gender=="All"){
        $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
    }
    
    $query = mysqli_query($conn, $sql);
    $num=mysqli_num_rows($query);
    if($num>0){
        while($row = mysqli_fetch_assoc($query)){
            if($row['verify']==1){
                
                $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'" class="a_people">
                <div class="content" style="padding-top:20px">
                    <img src="php/images/'. $row['img'] .'" alt="">
                </div>
                <div class="detail">
                <span>'. $row['username']. '</span>
            </div>
            </a>';
            }
    
        }
    }elseif($num==0){
        
        echo "<div style='position:relative;font-size:35px;padding-top:150px;text-align:center;font-weight:bold;'>No<span style='color:green'> $gender </span>people available</div>";
    }

?>
<style>
    .a_people { 
        display: inline-block;
        margin-left: 33px;
        background-color:white ;
    }
    .detail{
        text-align: center;
        color: black;
        font-size: 18px;
    }
    img{
        width: 82px;
        height: 82px;
    }
</style>