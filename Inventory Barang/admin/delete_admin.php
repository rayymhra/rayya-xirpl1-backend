<?php
include "../koneksi.php";

$id = $_GET['id'];
$sql = $conn->query("DELETE FROM tbl_admin WHERE id = $id");

//sweetalert
if($sql){
    echo "
    <script>
        window.location.href = 'admin.php?msg=success';
    </script>";
}else{
    echo "
    <script>
        window.location.href = 'admin.php?msg=error&error=" . mysqli_error($conn) . "';
    </script>";
}


?>