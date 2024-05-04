<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>

<h2>Insert Data into Table</h2>
<script src="./tailwind.config.js"></script>
<form action="./tp.php" method="post">
    Name: <input type="text" name="name" class="bg-Bpurple"><br><br>
    Mobile: <input type="text" name="mobile"><br><br>
    Email: <input type="text" name="email"><br><br>
    Message: <textarea name="message"></textarea><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost"; // Change this if your MySQL server is on a different host
    $username = "root"; // Default username in XAMPP is 'root'
    $password = ""; // Default password is empty in XAMPP
    $database = "test"; // Name of your database

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user input
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the table
    $sql = "INSERT INTO new (Name, Mobile, Email, Message) VALUES ('$name', '$mobile', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>New record created successfully</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

</body>
</html>
