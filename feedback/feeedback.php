<?php

$mysqli = new mysqli ('localhost','root','','feedback');

$Tid = $_POST['Tid'];
$Temail = $_POST['Temail'];
$Designation = $_POST['Designation'];
$id = $_POST['id'];
$email = $_POST['email'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$programme = $_POST['programme'];
$level = $_POST['level'];
$rating = $_POST['rating'];
$comments = $_POST['comments'];



$sql = "INSERT INTO `feed` (`Tid`, `Temail`, `Designation`, `id`, `email`, `date`, `phone`,`programme`,`level`,`rating`,`comments`)
VALUES (`$Tid`, `$Temail`, `$Designation`, `$id`, `$email`, `$date`, `$phone`,`$programme`,`$level`,`$rating`,`$comments`)";

$rs = mysqli_query($mysqli, $sql);

if($rs)
{
	echo "Feedback Saved";
}
else
{
    echo "error";
}
?>