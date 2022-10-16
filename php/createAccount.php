<?php
include 'patients_connection.php';

$conn = OpenCon();
echo "Connected Successfully";


$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$phone = $_REQUEST['phone'];
$dob = $_REQUEST['dob'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zip = $_REQUEST['zip'];
$reasonForAdmission = $_REQUEST['reasonForAdmission'];
$numbrtOfVisitors = 0;

$sql = "INSERT INTO patients (firstName, lastName, email, password, phone, dob, address, city, state, zip, reasonForAdmission, numbrtOfVisitors) VALUES ('$firstName', '$lastName', '$email', '$password', '$phone', '$dob', '$address', '$city', '$state', '$zip', '$reasonForAdmission', '$numbrtOfVisitors')";

if($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);
?>