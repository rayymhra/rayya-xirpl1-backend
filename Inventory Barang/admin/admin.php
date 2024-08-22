<?php
include "../koneksi.php"

// library data table
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>inventory barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- sweet alert -->
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<?php
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  $error = isset($_GET['error']) ? $_GET['error'] : '';

  echo "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: '" . ($msg == 'success' ? 'success' : 'error') . "',
                    title: '" . ($msg == 'success' ? 'Deleted!' : 'Error!') . "',
                    text: '" . ($msg == 'success' ? 'Data berhasil dihapus yey' : 'Yahhh: ' . $error) . "',
                    confirmButtonText: 'OK'
                });
            });
        </script>";
}


?>

<body>
  <div class="container">
    <h1>Admin</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nama</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Email</th>
          <th scope="col">Telpon</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = $conn->query("SELECT * FROM tbl_admin");
        while ($row = mysqli_fetch_assoc($sql)) {
        ?>
          <tr>
            <th><?php echo $row['id']; ?></th>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telepon']; ?></td>
            <td>
              <a href="edit_admin.php?id=<?php echo $row["id"]; ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a> <!-- tombol edit-->
              <a href="delete_admin.php?id= <?php echo $row["id"]; ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a> <!-- tombol hapus-->
            </td>
          </tr>
        <?php
        }

        ?>

      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.js"></script>
</body>

</html>