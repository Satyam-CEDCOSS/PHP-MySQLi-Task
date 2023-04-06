<?php
session_start();
$_SESSION["Data"]=array();

// Login Page SQL 
$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$mail = $_POST["mail"];
$pass = $_POST["password"];

$sql = "SELECT `ID`, `Names`, `Email`, `Passwords` FROM datas WHERE `Email`='$mail' and `Passwords`='$pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
    $data = mysqli_fetch_assoc($result);
    array_push($_SESSION["Data"],$data);
    echo "success";
}
?>