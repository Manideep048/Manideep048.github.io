<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$full_name = $_POST['full_name'];
$graduation_year = $_POST['graduation_year'];
$batch_number = $_POST['batch_number'];
$phone_number = $_POST['phone_number'];
$email_address = $_POST['email_address'];
$present_company = $_POST['present_company'];

// Check if email address or phone number already exists in the database
$check_sql = "SELECT * FROM alumni_info WHERE email_address = '$email_address' OR phone_number = '$phone_number'";
$check_result = $conn->query($check_sql);

if ($check_result->num_rows > 0) {
    // Email address or phone number already exists
    echo "Error: This email address or phone number is already registered.";
} else {
    // Email address and phone number do not exist, insert data into the database
    $insert_sql = "INSERT INTO alumni_info (full_name, graduation_year, batch_number, phone_number, email_address, present_company)
                   VALUES ('$full_name', '$graduation_year', '$batch_number', '$phone_number', '$email_address', '$present_company')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
