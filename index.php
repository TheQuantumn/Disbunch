<?php
// Include the database configuration file
include('db.php');

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your SQL query
$sql = "SELECT * FROM students";

// Perform the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Query failed: " . $conn->error);
}

// Initialize counter
$activeCount = 0;

// Iterate through the results
while ($row = $result->fetch_assoc()) {
    // Check if 'status' key exists and is active
    if (array_key_exists("status", $row) && $row["status"] == 1) {
        $activeCount++;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    margin: 0;
    padding: 0;
    background: linear-gradient(to right, #ffcc00, #1a1a1a); /* Background gradient (yellow to black) */
    font-family: 'Arial', sans-serif;
    color: #fff; /* Text color (white) */
}

.container {
    text-align: center;
    padding: 100px;
}

.logo {
    /* Add styles for logo if needed */
}

h1 {
    font-size: 2.5em;
    color: #000; /* Black */
}

p {
    font-size: 1.2em;
    color: #000; /* Black */
}

.buttons {
    margin-top: 20px;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1em;
    text-decoration: none;
    color: #000; /* Black text */
    border: 2px solid #ffcc00; /* Yellow border */
    background: #ffcc00; /* Yellow background */
    transition: all 0.3s ease;
}

.button:hover {
    background: none;
    color: #ffcc00; /* Yellow text on hover */
    box-shadow: 0 0 20px #ffcc00; /* Yellow glow on hover */
}
#background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
        }
        
        .translucent-container {
            background-color: rgba(255, 256, 255, 0.7); /* White translucent background */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            width: 80%; /* Adjust width as needed */
            border-radius: 10px; /* Add border radius for rounded corners */
        }

    </style>
    <title>Disbunch</title>
</head>

<body>
<audio loop autoplay muted>
    <source src="2.mp3" type="audio/mp3">
    Your browser does not support the audio tag.
</audio>

    <div class="container">
    <video autoplay muted loop id="background-video">
        <source src="1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="translucent-container">
            <img src="1.png" alt="Logo" class="logo" width="150px" height="150px">
            <u><h1 style="font-family:'Courier New'" >Welcome to Disbunch</h1></u>
            <p style="font-family:'Garamond'">Total Registered: <?php echo $result->num_rows; ?></p>
            <p style="font-family:'Garamond'">Inside: <?php echo $activeCount; ?></p>
            <div class="buttons">
            <a href="output.php" class="button">View Table</a>
            </div>
            <div class="buttons">
                <a href="enter_student_id.php" class="button">Change Status</a>
            </div>

    </div>
    </div>



</body>

</html>
