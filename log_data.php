<?php
$con = mysqli_connect( 'localhost', 'root', '' ) or die( 'no connection' );
$db = mysqli_select_db( $con, '5f6' ) or die( 'no database' );
$query = 'select *from login';
$result = mysqli_query( $con, $query ) or die( 'no query' );
$name = $_GET[ 'username' ];
$password = $_GET[ 'pwd' ];
$c=0;

while( $row = mysqli_fetch_array( $result ) ) {
    if ( $name == $row[ 'Username' ] ) {
        if ( $password == $row[ 'Password' ] ) {
            echo 'Success';
            $c=1;
            break;
        } else {
            echo 'Unsuccessful';
            $c=1;
            break;
        }
    } else
    continue;
  }
    if($c==0)
    header('Location:registration.html');