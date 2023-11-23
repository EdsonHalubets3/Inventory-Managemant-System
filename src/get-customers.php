<?php
require_once '../config/connect.php';

$sql = "SELECT * FROM customers WHERE id = ?";

$stmt = $con->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $fname, $lname, $company, $number, $email, $street, $postcode, $city, $contry);
$stmt->fetch();
$stmt->close();
