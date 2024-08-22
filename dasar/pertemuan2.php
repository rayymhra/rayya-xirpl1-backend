<?php 

// if else
//if ternary

$name = "rayya";
if($name == "amam"){
    echo"ada tamam";
}elseif($name == "rayya"){
    echo "ada rayya";
}else{
    echo"gaadaaa";
}

echo "<hr>";


//perulangan
// for, while, do..while, foreach(perulangan khusus array)

//for
for($a = 0; $a < 5; $a++){
    // echo $a;
    echo $a."<br>";
}
//output: 01234

echo "<hr>";

//while
$b=0; 
while($b < 5){
    echo $b;
    $b++;
}
//output: 01234

echo "<hr>";

//do..while
$c = 10; 
do{
    echo $c;
    $c++;
}while($c < 5);

echo "<hr>";


$c = 1; 
do{
    echo $c;
    $c++;
}while($c < 5);


echo "<hr>";


//foreach
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $color) {
    echo "$color <br>";
}

?>