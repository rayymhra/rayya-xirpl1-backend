<?php 
include "../koneksi.php";

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $sql = $conn->query("INSERT INTO tbl_admin VALUES(NULL, '$nama', '$username', '$password', '$email', '$telepon')");
    if($sql){ //sweet alert
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
                        window.location.href = 'admin.php';
                    }
                });
            });
        </script>";
    }else{  
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



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Add Admin</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-5">
                <label class="form-label">Telpon</label>
                <input type="text" class="form-control" name="telepon">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <a href="admin.php" class="btn btn-danger">Cancel</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.js"></script>
</body>

</html>