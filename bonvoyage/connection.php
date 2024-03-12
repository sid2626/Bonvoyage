<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "bonvoyage";
$conn = new mysqli($servername, $username, $password, $bonvoyage, 3306);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "Successful";

?>