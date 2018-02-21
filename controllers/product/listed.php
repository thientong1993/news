<?php  
    $product=new Product();
    $listed=$product->listed();
    include_once('views/product/listed_view.php');
?>