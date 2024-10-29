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
    $company_name = $conn->real_escape_string($_POST['company_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']); 
    $company_address = $conn->real_escape_string($_POST['company_address']);
    $industry = $conn->real_escape_string($_POST['industry']);
    if (isset($_POST['company_size'])) {
        $company_size = $conn->real_escape_string($_POST['company_size']);
    } else {
        $company_size = ''; // or some default value
    }
    // $phone = $conn->real_escape_string($_POST['phone_number']);
    
    // Insert the data into the database
    $sql = "INSERT INTO employer (company_name, email, password, company_address, industry, company_size) 
        VALUES ('$company_name', '$email', '$password', '$company_address', '$industry', '$company_size')";

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