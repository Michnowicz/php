<?php


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "voitures";


try {
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Succeded";
} catch (PDOException $e) {
    echo "Error in connection " . $e->getMessage();
}
