<?php 
    $name = $_POST['name'];
    $address = $_POST['address'];
    $Size = $_POST['Size'];
    $Quantity = $_POST['Quantity'];
    $Color = $_POST['Color'];



    $servername= "localhost";
    $uname="root";
    $pw="";
    $dbname="pedro";

$conn=mysqli_connect($servername,$uname,$pw,$dbname);

$sql= "INSERT INTO footwear (name, address, Size, Quantity, Color) VALUES ('$name','$address','$Size','$Quantity','$Color')";
if (mysqli_query($conn, $sql)) {
echo file_get_contents('index.html');
} 
?>