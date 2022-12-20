<?php

$mysqli = new mysqli ('localhost', 'root','','feedback');

$companyid = $_POST['cid'];
$password = $_POST['pass'];
echo $companyid;
echo $password;


$query = "SELECT * FROM signup where password='$password' and companyid='$companyid'";

$result = $mysqli->query($query);

    if (mysqli_num_rows($result) === 1){
        header("Location: home.html");
    } 
    else {
        echo "Wrong Credentials";
    }

?>

?>