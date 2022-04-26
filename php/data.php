
<?php 
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if(mysqli_num_rows($query2) ==1 ){
            $result = $row2['msg'];
            $result1 = $row2['image'];
        }else{
            $result ="No message available";
            $result1 ="No message available";
        }
        if($result!="No message available" || $result1!="No message available"){
            (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
            (strlen($result1) > 28) ? $msg1 =  substr($result1, 0, 28) . '...' : $msg1 = $result1;
            if($outgoing_id == $row2['outgoing_msg_id']){
                $you = "You: ";
                $you1 = "You: ";
            }else{
                $you="";
                $you1="";
            }
            //($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
            ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
            ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";
            if($outgoing_id == $row2['outgoing_msg_id']){
                if($row2['image_send']==NULL){
                    if($row2['msg']=="This message was deleted")
                        $msg="<span style='font-style:italic;font-size:14px'>This message was deleted</span>";
                    else
                        $msg=$row2['msg'];
                    $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span style="color:black">'. $row['username'].'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
                }else{
                    if($row2['image_send']=="This message was deleted")
                        $msg1="<span style='font-style:italic;font-size:14px'>This message was deleted</span>";
                    else
                        $msg1="Image";
                    $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span style="color:black">'. $row['username'].'</span>
                        <p>'. $you1 . $msg1 .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
                }
        }else{
            if($row2['image_send']==NULL){
                if($row2['msg']=="This message was deleted")
                        $msg="<span style='font-style:italic;font-size:14px'>This message was deleted</span>";
                else
                    $msg=$row2['msg'];
                $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                <div class="content">
                <img src="php/images/'. $row['img'] .'" alt="">
                <div class="details">
                    <span style="color:black">'. $row['username'].'</span>
                    <p style="color:green;">'. $you . $msg .'</p>
                </div>
                </div>
                <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
            </a>';
            }else{
                if($row2['image_send']=="This message was deleted")
                    $msg1="<span style='font-style:italic;font-size:14px'>This message was deleted</span>";
                else
                    $msg1="Image";
                $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                <div class="content">
                <img src="php/images/'. $row['img'] .'" alt="">
                <div class="details">
                    <span style="color:black">'. $row['username'].'</span>
                    <p style="color:green;">'. $you1 . $msg1 .'</p>
                </div>
                </div>
                <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
            </a>';
            }
        }
            
        }
    }
    if($result=="No message available"){
        $output .= "<div class='testuser'>Please choose an people to start chat</div>";
    }
        
?>
<style>
    .testuser{
        font-size:40px;
        padding-top:295px;
        text-align:center;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

</style>