<?php
$na = $_GET['Username'];
$pass = $_GET['Password'];
$con = mysqli_connect('localhost', 'root', '') or die('no connection');
$db = mysqli_select_db($con, '5d8') or die('no database');
$query = "insert into login values('$na','$pass')";
$result = mysqli_query($con, $query) or die('no query');

if ($result == null)
    echo "Failed to register";
else {
    echo "Registered Successfully";
    //header('Location:login.html');

}
mysqli_close($con);
