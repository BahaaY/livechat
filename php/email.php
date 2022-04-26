<?php
  //$name = htmlspecialchars($_POST['name']);
  //$email = htmlspecialchars($_POST['email']);
  //$phone = htmlspecialchars($_POST['phone']);
  //$website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);
  //$header = "From : ".$email;
  if( !empty($message)){
      $receiver = "bahaayassin92@gmail.com";
      $subject = "LiveChat";
      $body = $message;
      //$sender = "From: $email";
      if(mail($receiver, $subject, $body)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
  }else{
    echo "Message field is required!";
  }
?>
