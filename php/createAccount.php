<?php
include 'patients_connection.php';

$conn = OpenCon();
echo "Connected Successfully";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

$sql = "INSERT INTO patients (firstName, lastName, email, phone, address, city, state, zip) VALUES ('$firstName', '$lastName', '$email', '$phone', '$address', '$city', '$state', '$zip')";

CloseCon($conn);
?>