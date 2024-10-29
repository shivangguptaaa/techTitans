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
 
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM jseeker WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }   

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Hello " . $row['first_name'] . "<br/>";

    $_SESSION['user_id'] = $row['id'];
    $_SESSION['fname'] = $row['first_name'];

        ?>
        <a href="dashboard.html"> Click Here </a>
        <?php
    } else {
        echo "Login Failed<br/>";
    }

    mysqli_close($conn);
?>
