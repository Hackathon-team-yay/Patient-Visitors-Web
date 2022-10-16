<?php
include 'patients_connection.php';

$conn = OpenCon();
echo "Connected Successfully";


$firstName = $_POST['firstName'];
$lastName = 'Smith';
$email = 'asdf@gmail.com';
$password = 'test';
$phone = '807-123-4567';
$dob = '03/03/1999';
$address = '123 Main St';
$city = 'Columbia';
$state = 'MO';
$zip = '65202';
$reasonForAdmission = 'dead';
$numbrtOfVisitors = '3';

$sql = "INSERT INTO patients (firstName, lastName, email, password, phone, dob, address, city, state, zip, reasonForAdmission, numbrtOfVisitors) VALUES ('$firstName', '$lastName', '$email', '$password', '$phone', '$dob', '$address', '$city', '$state', '$zip', '$reasonForAdmission', '$numbrtOfVisitors')";

if($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);
?>