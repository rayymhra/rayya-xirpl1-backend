<?php
include "../koneksi.php";
session_start();

$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $contact_person = $_POST['contact_person'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    $sql = $conn->query("UPDATE tbl_supplier SET nama = '$nama', alamat = '$alamat', contact_person = '$contact_person', telepon = '$telepon', email = '$email'");


    // sweetalert
    if ($sql) {
        $_SESSION['alert'] = ['type' => 'success', 'message' => 'Data berhasil diedit'];
        header("Location: edit_supplier.php?id=$id");
    } else {
        $_SESSION['alert'] = ['type' => 'error', 'message' => 'Data tidak berhasil diedit: ' . mysqli_error($conn)];
        header("Location: edit_supplier.php?id=$id");
    }
    exit();
}

$alert = isset($_SESSION['alert']) ? $_SESSION['alert'] : null;
unset($_SESSION['alert']);

if (isset($_GET['id'])) {
    $sql = $conn->query("SELECT * FROM tbl_supplier WHERE id = '$id'");
    $row = mysqli_fetch_assoc($sql);
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- sweet alert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Supplier</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
            </div>
            <div class="mb-3">
                <label>Contact Person</label>
                <input type="text" class="form-control" name="contact_person" value="<?php echo $row['contact_person']; ?>">
            </div>
            <div class="mb-3">
                <label>Telepon</label>
                <input type="text" class="form-control" name="telepon" value="<?php echo $row['telepon']; ?>">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </div>

            <button type="submit" class="btn btn-success" name="submit">Update</button>
            <a href="supplier.php" class="btn btn-danger">Cancel</a>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.js"></script>

        </form>
    </div>


    <?php if ($alert): ?>
        <script>
            Swal.fire({
                icon: '<?php echo $alert['type']; ?>',
                title: '<?php echo ucfirst($alert['type']); ?>!',
                text: '<?php echo $alert['message']; ?>',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'supplier.php';
                }
            });
        </script>
    <?php endif; ?>
</body>

</html>