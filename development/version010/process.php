<?php
/**
 * Created by PhpStorm.
 * User: datdo
 * Date: 9/19/2018
 * Time: 6:21 PM
 */
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
if ( !empty($_POST) ) {
    $data = $_POST;
    $sql = "UPDATE customers SET company='".$data['company']."',last_name = 
    '".$data['last_name']."',first_name='".$data['first_name']."' WHERE id=".$data['id'];

    $result = $conn->query($sql);
    header("Location: http://localhost/project/production/");
    die();
}