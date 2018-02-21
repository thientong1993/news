<?php  
    $user=new User();
    $login=$user->login();
    include_once('views/user/login_view.php');
?>