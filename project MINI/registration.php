<?php
session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root');
if ($con) {
    echo "connection succesful";
} else {
    echo "no connetion";
}
mysqli_select_db($con, 'registration');
$fname = $_POST['username'];

$pass = $_POST['password'];
$email = $_POST['email'];

$q = "select * from signin where fname='$fname' && password ='$pass' && email = '$email' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo "duplicate data";
} else {
    $qy = "insert into signin(fname,password,email) values('$fname','$pass','$email')";
    mysqli_query($con, $qy);
}

?>
