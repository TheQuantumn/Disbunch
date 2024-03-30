<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disbunch - Enter Student ID</title>
    <style>
             #background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
        }
    
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('background_image.jpg');
            background-size: cover;
            color: #fff; /* White text color */
        }

        .container {
            text-align: center;
            padding: 100px;
        }

        h1 {
            font-size: 2.5em;
            color:black; /* Yellow */
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #ffcc00; /* Yellow */
        }

        input {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 20px;
            background: #1a1a1a; /* Black */
            border: 2px solid #ffcc00; /* Yellow border */
            color: #fff; /* White text color */
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
        .translucent-container {
            background-color: rgba(255, 255, 255, 0.7); /* White translucent background */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            width: 80%; /* Adjust width as needed */
            border-radius: 10px; /* Add border radius for rounded corners */
        }
    </style>
</head>
<body><video autoplay muted loop id="background-video">
    <source src="1.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
<center>
    <div class="translucent-container">
        <h1 >Enter Student ID</h1>

        <form action="update_status.php" method="post">
            <label for="student_id">Student ID:</label>
            <input type="text" name="student_id" required>
            <button type="submit" class="button">Update Status</button><br>
        </form>
        <br><br></p>

        <a href="index.php" class="button">Go Back</a>
    </div>
    </center>

</body>
</html>
