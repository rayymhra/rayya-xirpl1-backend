<?php
include "../koneksi.php";

$id = $_GET['id'];
$sql = $conn->query("DELETE FROM tbl_supplier WHERE id= $id");

//sweetalert
if ($sql) {
    echo "
    <script>
        window.location.href = 'supplier.php?msg=success';
    </script>";
} else {
    echo "
    <script>
        window.location.href = 'supplier.php?msg=error&error=" . mysqli_error($conn) . "';
    </script>";
}
