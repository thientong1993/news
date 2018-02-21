<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'login':include_once('controllers/user/login.php');
            break;
            case 'add':include_once('controllers/user/add.php');
            break;
        }
    }
?>