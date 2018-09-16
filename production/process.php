<?php
require "vendor/autoload.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "northwind";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<br> Du lieu tu form';
echo "<pre>";
print_r($_POST);
echo "</pre>";
if (isset($_POST) && !empty($_POST)) {
    $company = $_POST['company'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $first_name = $_POST['first_name'];
    $first_name = $_POST['email_address'];
    $first_name = $_POST['job_title'];
    $first_name = $_POST['business_phone'];
    $first_name = $_POST['home_phone'];
    $first_name = $_POST['mobile_phone'];
    $insert_sql = "INSERT INTO customers (company, first_name, last_name, email_address, job_title, business_phone, home_phone, mobile_phone) VALUES 
('". $company ."', '".$last_name."', '".$first_name."','".email_address."','".job_title."','".business."', '".home_phone."','".mobile_phone."')";
    if ($conn->query($insert_sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>