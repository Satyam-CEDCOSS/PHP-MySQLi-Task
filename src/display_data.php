<?php
session_start();
$txt="";
foreach ($_SESSION["Data"] as $key => $value) {
    $txt.="<tr><td>".$value["ID"]."</td><td>".$value["Names"]."</td><td>".$value["Email"]."</td><td>".$value["Passwords"]."</td></tr>";
}
echo $txt;
?>