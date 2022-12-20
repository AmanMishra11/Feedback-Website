<?php

$mysqli = new mysqli ('localhost:3306', 'root','','feedback');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$sql = "INSERT INTO `contacts` (`fname`, `lname`, `email`, `phone`, `message`)
VALUES ('$fname', '$lname', '$email', '$phone', '$message')";

$rs = mysqli_query($mysqli, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
else
{
    echo "error";
}
?>