<?php
include 'C:\ospanel\domains\MyApp\config\db_conn.php';
var_dump($_POST);
    
    $item_id = $_POST['item_id'];
    $count = $_POST['count'];
    $price = $_POST['price'];
    mysqli_query($conn,"INSERT INTO `storage` (`id`, `item_id`, `count`, `price`) VALUES (NULL, '$item_id', '$count', '$price')");

?>
