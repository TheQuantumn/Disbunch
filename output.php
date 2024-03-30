<?php
// Include the database configuration file
include('db.php');

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your SQL query
$sql = "SELECT age, name, student_id, year, status FROM students";

// Perform the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Query failed: " . $conn->error);
}

// Close the database connection
$conn->close();

// Display the results using the template
$templatePath = __DIR__ . '/output_template.html';

if (file_exists($templatePath)) {
    include($templatePath);
} else {
    echo 'Template file not found.';
}
?>
