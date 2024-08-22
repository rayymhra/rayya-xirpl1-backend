<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $contact_person = $_POST['contact_person'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];


    $sql = $conn->query("INSERT INTO tbl_supplier VALUES(NULL, '$nama', '$alamat', '$contact_person', '$telepon', '$email')");
    if ($sql) { //sweet alert
        echo "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data berhasil diinput',
                    confirmButtonText: 'OK'
                }).then((result) => {   //kalo mencet oke maka 
                    if (result.isConfirmed) {
                        window.location.href = 'supplier.php';
                    }
                });
            });
        </script>";
    } else {
        echo "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Yahhhhh: " . mysqli_error($conn) . "',
                    confirmButtonText: 'OK'
                });
            });
        </script>";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Supplier</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="mb-3">
                <label>Contact Person</label>
                <input type="text" class="form-control" name="contact_person">
            </div>
            <div class="mb-3">
                <label>Telepon</label>
                <input type="text" class="form-control" name="telepon">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
            </div>

            <button type="submit" class="btn btn-success" name="submit">Submit</button>
            <a href="supplier.php" class="btn btn-danger">Cancel</a>

        </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.js"></script>
</body>

</html>