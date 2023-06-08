<?php 
$sname = "localhost";
$uname = "root";
$password = "";
$dbname = "enrollmentdb";

$conn = mysqli_connect($sname, $uname, $password, $dbname);

if(!$conn) {
    echo "Connection Failed";
}

?>