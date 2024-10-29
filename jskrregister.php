<?php
// Database connection
$host = 'localhost'; 
$db = 'info';
$user = 'root'; 
$pass = ''; 

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']); // Store password directly without bcrypting
    $dob = $conn->real_escape_string($_POST['dob']);
    $gender = $conn->real_escape_string($_POST['gender']);

    // Insert the data into the database
    $sql = "INSERT INTO jseeker (first_name, last_name, mobile, email, password, dob, gender) 
            VALUES ('$first_name', '$last_name', '$mobile', '$email', '$password', '$dob', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
        header('Location: dashboard.html'); // Redirect to dashboard.html
        exit; // Stop executing the script
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>