<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'inventoryManager';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$supplierName = $_REQUEST['supplierName'];
$number = $_REQUEST['number'];
$email = $_REQUEST['email'];
$supplierStreet = $_REQUEST['supplierStreet'];
$supplierPostcode = $_REQUEST['supplierPostcode'];
$supplierCity = $_REQUEST['supplierCity'];
$supplierCountry = $_REQUEST['supplierCountry'];

$sql = "INSERT INTO suppliers (name, number, email, street, postcode, city, country)
VALUES
('$supplierName', '$number', '$email', '$supplierStreet', '$supplierPostcode', '$supplierCity', '$supplierCountry')";
if (mysqli_query($con, $sql)) {
    header('Location: ../public/suppliers.php');
}