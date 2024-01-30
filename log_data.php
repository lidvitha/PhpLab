<?php
$con = mysqli_connect('localhost', 'root', '') or die('no connection');
$db = mysqli_select_db($con, '5d8') or die('no database');
$query = 'select *from login';
$result = mysqli_query($con, $query) or die('no query');
$name = $_GET['name'];
$password = $_GET['password'];
$c = 0;

while ($row = mysqli_fetch_array($result)) {
    if ($name == $row['Username']) {
        if ($password == $row['Password']) {
            echo 'Welcome back '.$name;
            $c = 1;
            break;
        } else {
            echo 'Incorrect credentials';
            $c = 1;
            break;
        }
    } else
        continue;
}

if ($c == 0){
    echo 'User not found!';
    header('refresh:3;url=registration.html');
    exit;
}
