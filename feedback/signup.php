<?php

$mysqli = new mysqli ('localhost', 'root','','feedback');

$name = $_POST['name'];
$email = $_POST['email'];
$companyid = $_POST['regno'];
$password= $_POST['pass'];

$query = "INSERT INTO signup VALUES ('$name', '$email', '$companyid', '$password');";

if($mysqli->query($query))
{
    header("Location: sign.html");
} 

else {
    echo "Error: " . $query . "<br><br>";
}
?>