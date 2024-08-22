<?php //2-august-2024 friday di lab
// variable name tdk boleh diawali dgn angka tapi boleh mengandung angka

//output -> echo, print_r, var_dump
echo "Rayya Mahira <br>"; 
print_r("Rayyyyyaaaaaaaaaaaa mahiraaaaa <br>");
var_dump("Rayyaaa Mahiraa");


echo"<hr>";
//operator aritmatika
// + - * / %
$a = 140;
$b = 2343;
echo $a*$b;

echo"<hr>";
//assignment (to assign a new value to a variable)
// = += -= *= /= %= 

// penggabungan string / concatenation  / concat
//.=
$namaDpn = "Rayya";
$namaBlkng = "Mahira";
$namaLengkap = $namaDpn." ".$namaBlkng;
echo $namaLengkap;

echo "<hr>";
//perbandingan
// < > <= >= == !=
var_dump(1<5);


echo"<hr>";
//identitas -> sekalian ngecek datatype nyaaaaa
// === !==
$a = 5;
$b = "5";
var_dump($a === $b);



echo"<hr>";
// Logika
// && ||
$a = "Rayyyaaaaa";
$b = "MAhira";
var_dump($a == "Rayya" && $b == "mahira");


// html didalam php
echo"<h1>halo php<h1>";

$namaSaya = "Rayya Mahira";
?>

<!-- php didalam html -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo"eyooo php";?></h1>
    <h1>Hey <?php echo$namaSaya;?>❤🔥🦋</h1>
    <h1><?="eyooo php";?></h1>
</body>
</html>