<?php
include 'db_conn.php';
function get_storage(){
$sql = "SELECT * FROM `storage`";
    $result = mysqli_query($conn,$sql);
    var_dump($result);
}

get_storage();
