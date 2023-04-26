<pre>
<?php
include 'C:\ospanel\domains\MyApp\db_conn.php';

$sql = "SELECT * FROM `storage`";
    $result = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($result);
    var_dump($result);
?>

</pre>
<div class="page-container align-center">
    <h1 style="align-self: center">main</h1>
    <p>
    main
    </p>
    <p>

    </p>
</div>
