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
            echo '<script type="text/javascript">
           window.location = "http://vislister.tech/main.html"
      </script>';
            die();    
        }
        
        mysqli_free_result($res);
    }
    else{
        echo '<script type="text/javascript">
           window.location = "http://vislister.tech/index.html"
      </script>';
    }

}



CloseCon($conn);
?>