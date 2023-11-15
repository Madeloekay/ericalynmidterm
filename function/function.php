<?php
require '../config/dbcon.php';

if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);

    $query = "INSERT INTO msg (name, email, msg) VALUES ('$name', '$email', '$msg')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        echo "Thank you! message has been successfully submitted.";
    } else {
        echo "Error" . mysqli_error($conn);
    }
}
