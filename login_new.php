<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your form handling logic here

    // If the registration is successful, redirect to the login page
    echo "Successfully registered!";
    header("Location: login.html");
    exit();
}
?>
