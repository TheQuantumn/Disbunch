<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Your existing styles here */

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ffcc00, #1a1a1a);
            font-family: 'Arial', sans-serif;
            color: #fff;
        }

        /* Add the new CSS for the pop-up here */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            color: #000;
            border: 1px solid #000;
            border-radius: 5px;
            z-index: 9999;
        }

        /* Your other styles */
    </style>
    <title>Disbunch</title>
</head>

<body>
<body>


    <script>


        function showMessage(name) {
            var message = document.createElement('div');
            message.className = 'popup';
            message.innerText = name + ' was updated';
            document.body.appendChild(message);

            setTimeout(function () {
                message.remove(); // Remove the pop-up after 1 second
                window.location.href = 'index.php'; // Redirect to homepage
            }, 1000);
        }
    </script>
</body>
    <!-- Your HTML content -->
</body>

</html>

<?php
// Include the database configuration file
include('db.php');

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL injection
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    // Check if the student ID exists
    $check_id_sql = "SELECT * FROM students WHERE student_id = '$student_id'";
    $result = $conn->query($check_id_sql);

    if ($result->num_rows > 0) {
        // Update the status
        $update_sql = "UPDATE students SET status = NOT status WHERE student_id = '$student_id'";
        $update_result = $conn->query($update_sql);

        // Check if the query was successful
        if ($update_result === false) {
            die("Query failed: " . $conn->error);
        }

        // Redirect back to the previous page
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    } else {
        // ID does not exist, display error message
        echo "<script>
        // Create a translucent pop-up square
        var popup = document.createElement('div');
        popup.textContent = 'ID does not exist';
        popup.classList.add('popup');
        document.body.appendChild(popup);

        // Hide the pop-up 
        setTimeout(function () {
            popup.remove(); // Remove the pop-up after 1 second
            window.location.href = 'index.php'; // Redirect to homepage
        }, 1000)
      </script>";

    }
}
?>
