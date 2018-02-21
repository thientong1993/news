<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mô hình MVC</title>
</head>
<body>
    <?php  
        include_once('library/__autoload.php');
        if(isset($_GET['controller'])){
            switch($_GET['controller']){
                case 'user':include_once('controllers/user/user.php');
                break;
                case 'product':include_once('controllers/product/product.php');
                break;
            }
        }else{
            header('location:index.php?controller=user&act=login');
        }
    ?>
</body>
</html>