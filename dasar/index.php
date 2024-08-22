<?php 
    include "koneksi.php";
    // if there is a data named insert then
    if(isset($_POST['insert'])){
        // echo"data terkirim";
        //declaring variables
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //connect into database with this perintah
        $sql = $conn->query("INSERT INTO admin VALUES(NULL, '$nama','$username','$password')");

        if($sql){
            echo"input berhasil";
        }
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            margin: 30px 20px;
        }
        label{
            display: block;
            color: brown;
            margin-bottom: 10px;
        }
        button {
            display: block;
            margin-top: 10px;
            border-radius: 50px;
            padding: 10px;
            border: none;
            color: white;
            background-color: brown;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label>nama:</label>
        <input type="text" name="nama">
        <label>username:</label>
        <input type="text" name="username">
        <label>password:</label>
        <input type="password" name="password">
        <button type="submit" name="insert">Log In</button>
    </form>
</body>
</html>