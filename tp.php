<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Check if the form is submitted
if(isset($_POST['login'])) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user input
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Prepare and execute statement to retrieve user data
    $stmt = $conn->prepare("SELECT name, pass1 FROM signup WHERE name=?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with the provided username exists
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Verify the entered password with the hashed password stored in the database
        if (password_verify($password, $row['pass1'])) {
            // Password matches, set session variable and redirect
            $_SESSION['username'] = $name;
            header("Location: owner.html");
            exit();
        } else {
            // Invalid password
            $error_message = "Invalid password. Please try again.";
        }
    } else {
        // User does not exist
        $error_message = "User not found. Please try again.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form action="" method="post">
    Name: <input type="text" name="name" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php if(isset($error_message)) echo "<p>$error_message</p>"; ?>

</body>
</html>
