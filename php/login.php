<?php
include 'patients_connection.php';

$conn = OpenCon();
echo "Connected Successfully";


$email = $_REQUEST['email'];
$table = $_REQUEST['table'];
$password = $_REQUEST['password'];

$sql = "SELECT email FROM $table WHERE email='$email' AND password='$password'";

if ($res = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {
            header("Location: ../main.html");
            die();    
        }
        
        mysqli_free_result($res);
    }
    else
    {
        header("Location: ../index.html");
        die();
    }
}



CloseCon($conn);
?>