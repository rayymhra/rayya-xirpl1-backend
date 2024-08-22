<?php
include "../koneksi.php"
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
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
                    text: '" . ($msg == 'success' ? 'Data berhasil dihapuss' : 'Yahhh: ' . $error) . "',
                    confirmButtonText: 'OK'
                });
            });
        </script>";
}


?>

<body>
    <div class="container">
        <h1>Supplier</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Contact Person</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = $conn->query("SELECT * FROM tbl_supplier");
                while($row = mysqli_fetch_assoc($sql)){
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['nama'];?></td>
                        <td><?php echo $row['alamat'];?></td>
                        <td><?php echo $row['contact_person'];?></td>
                        <td><?php echo $row['telepon'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td>
                            <a href="edit_supplier.php?id=<?php echo $row['id'];?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="delete_supplier.php?id=<?php echo $row['id'];?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></i></a>
                        </td>
                    </tr>

                    <?php
                } ?>
                
                
            </tbody>
        </table>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.js"></script>
</body>

</html>