<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "customers_db";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM customers_tbl";
    $stmt = $conn->query($sql);

    $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
