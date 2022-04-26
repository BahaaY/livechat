<?php
if (isset($_COOKIE['LiveChatEmail']) && isset($_COOKIE['LiveChatPassword'])) {
    unset($_COOKIE['LiveChatEmail']); 
    unset($_COOKIE['LiveChatPassword']); 
    setcookie('LiveChatEmail', null, -1, '/');
    setcookie('LiveChatPassword', null, -1, '/'); 
    echo "<script>alert('Email and Password remember has disabled');window.location.href='login.php';</script>";
}else{
    echo "<script>alert('No prior remember for Email and Password');window.location.href='login.php';</script>";
}
?>