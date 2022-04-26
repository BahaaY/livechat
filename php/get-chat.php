
<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['image_send']!=NULL){
                    if($row['outgoing_msg_id'] == $outgoing_id){
                        if($row['image_send']!="This message was deleted"){
                            $gettime=$row['msgtime'];
                            $output .= '<div class="chat outgoing">
                            <div class="details" style="margin-top:-15px;">
                            <a href="deletemsg.php?user_id='.$row['incoming_msg_id'].'&msg_id='.md5($row['msg_id']).'"  class="fa fa-trash" aria-hidden="true" style="position:relative;top:21px;color:green;"></a>
                            <a href="openImageSend.php?user_id='.$row['incoming_msg_id'].'&msg_id='.md5($row['msg_id']).'"><p style="max-width:550px;"><img src="php/images/'. $row['image_send'].'" style="object-fit: cover;border-radius: 5px;max-width:100%;width:250px;max-height:100%;height:250px;">' .'&nbsp;<span style="font-size:10px;">'.date('h:i a',strtotime($gettime)).'</span></p></a>
                            </div>
                            </div>';
                        }else{
                            $gettime=$row['msgtime'];
                            $output .= '<div class="chat outgoing">
                            <div class="details" style="margin-top:-15px">
                                <i class=" fas fa-ban" style="position:relative;top:21px;color:crimson;"></i>
                                <p style="color:crimson;font-size:17px;font-style:italic;max-width:550px">'. $row['image_send'] .'&nbsp;<span style="font-size:10px;">'.date('h:i a',strtotime($gettime)).'</span></p>
                            </div>
                            </div>';
                        }
                    }else{
                        if($row['image_send']!="This message was deleted"){
                            $gettime=$row['msgtime'];
                            $output .= '<div class="chat incoming"><img src="php/images/'.$row['img'].'" alt="">
                            <div class="details" style="padding-top:10px">
                            <div class="trash"></div>
                            <a href="openImageSend.php?user_id='.$row['outgoing_msg_id'].'&msg_id='.md5($row['msg_id']).'"><p style="max-width:550px"><img src="php/images/'. $row['image_send'].'" style="object-fit: cover;border-radius: 5px;max-width:100%;width:250px;max-height:100%;height:250px;">'.'&nbsp;<span style="font-size:10px;">'.date('h:i a',strtotime($gettime)).'</span></p></a>
                             </div>
                            </div>';
                        }else{
                            $gettime=$row['msgtime'];
                            $output .= '<div class="chat incoming"><img src="php/images/'.$row['img'].'" alt="">
                            <div class="details">
                                <i class=" fas fa-ban" style="position:relative;top:10px;color:crimson;"></i>
                                <p style="color:red;font-size:17px;font-style:italic;max-width:550px;margin-top:-10px">'. $row['image_send'] .'&nbsp;<span style="font-size:10px;">'.date('h:i a',strtotime($gettime)).'</span></p>
                            </div>
                            </div>';
                        }
                            /*$gettime=$row['msgtime'];
                            $output .= '<div class="chat incoming"><img src="php/images/'.$row['img'].'" alt="">
                            <div class="details" style="padding-top:17px">
                            <div class="trash"></div>
                                <p style="max-width:550px">'. $row['image_send'] .'&nbsp;<span style="font-size:10px;">'.date('h:i a',strtotime($gettime)).'</span></p>
                             </div>
                            </div>';*/
                    }
                }else{

                if($row['outgoing_msg_id'] == $outgoing_id){
                    if($row['msg']!="This message was deleted"){
                        $gettime=$row['msgtime'];
                        $output .= '<div class="chat outgoing">
                        <div class="details" style="margin-top:-15px">
                        <a href="deletemsg.php?user_id='.$row['incoming_msg_id'].'&msg_id='.md5($row['msg_id']).'"  class="fa fa-trash" aria-hidden="true" style="position:relative;top:21px;color:green;"></a>
                            <p style="max-width:550px;">'. $row['msg'] .'&nbsp;<span style="font-size:10px;">'.date('h:i a',strtotime($gettime)).'</span></p>
                        </div>
                        </div>';
                    }else{
                        $gettime=$row['msgtime'];
                        $output .= '<div class="chat outgoing">
                        <div class="details" style="margin-top:-15px">
                            <i class=" fas fa-ban" style="position:relative;top:21px;color:crimson;"></i>
                            <p style="color:crimson;font-size:17px;font-style:italic;max-width:550px">'. $row['msg'] .'&nbsp;<span style="font-size:10px;">'.date('h:i a',strtotime($gettime)).'</span></p>
                        </div>
                        </div>';
                    }
                }else{
                    if($row['msg']!="This message was deleted"){
                        $gettime=$row['msgtime'];
                        $output .= '<div class="chat incoming"><img src="php/images/'.$row['img'].'" alt="">
                        <div class="details" >
                        <div class="trash"></div>
                            <p style="max-width:550px;margin-top:15px;">'. $row['msg'] .'&nbsp;<span style="font-size:10px;">'.date('h:i a',strtotime($gettime)).'</span></p>
                         </div>
                        </div>';
                    }else{
                        $gettime=$row['msgtime'];
                        $output .= '<div class="chat incoming"><img src="php/images/'.$row['img'].'" alt="">
                        <div class="details">
                            <i class=" fas fa-ban" style="position:relative;top:10px;color:crimson;"></i>
                            <p style="color:red;font-size:17px;font-style:italic;max-width:550px;margin-top:-10px">'. $row['msg'] .'&nbsp;<span style="font-size:10px;">'.date('h:i a',strtotime($gettime)).'</span></p>
                        </div>
                        </div>';
                    }
                }
            }
        }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>