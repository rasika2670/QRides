<?php
// Function to establish database connection
function connectDB() {
    $servername = "localhost";
    $username = "aniket"; // Replace with your MySQL username
    $password = "ani12343"; // Replace with your MySQL password
    $dbname = "sikki"; // Replace with your MySQL database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to add Lend data to the database
function addLendData($data) {
    $conn = connectDB();

    // Process form data
    // You can access form fields using $_POST array
    $name = $data['name'];
    $license = $data['license'];
    $from = $data['from'];
    $to = $data['to'];
    $vehicle_no = $data['vehicle_no'];
    $phone = $data['phone'];
    $email = $data['email'];
    $address = $data['address'];

    // You can perform additional validation or sanitization of data here if needed

    // Insert data into database
    $sql = "INSERT INTO lend (name, license, from_location, to_location, vehicle_no, phone, email, address) VALUES ('$name', '$license', '$from', '$to', '$vehicle_no', '$phone', '$email', '$address')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Call function to add Lend data to the database
    $success = addLendData($_POST);

    if ($success) {
        echo "Data added successfully!";
    } else {
        echo "Failed to add data!";
    }
}
?>
