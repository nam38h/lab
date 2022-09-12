<?php
include_once "database.php";
$sqli = "SELECT * FROM `tour`";
    $result = $conn->query($sqli);
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $sql = "DELETE FROM `tours` WHERE `id`=$id";
    mysqli_query($conn,$sql);
?>