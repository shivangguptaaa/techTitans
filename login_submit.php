<?php
    session_start();

    $db_hostname = "127.0.0.1";
    $db_username = "root"; 
    $db_password = "";
    $db_name = "info";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }
 
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitize the input
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM jseeker WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);

    if ($row) {
        header("Location: dashboard.html");
        exit;
    } else {
        echo "Invalid email or password";
    }

    mysqli_close($conn);
?>