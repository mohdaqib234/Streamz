<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'authentication');

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

 if ($email && $password) {
  $query="select * from  authentication where email='$email' and password='$password'";
}


?>