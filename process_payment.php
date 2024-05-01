<?php

// Database connection
$conn = new mysqli('localhost','root','','QRide');
if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
} else {
        $stmt = $conn->prepare("insert into registration(companyName, model, availTo, availFrom, timeTo, timeFrom, address, photos, vehicle, mileage, power, weight, price) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiiiissiiiii", $companyName, $model, $availTo, $availFrom, $timeTo, $timeFrom, $address, $photos, $vehicle, $mileage, $power, $weight, $price);
        $execval = $stmt->execute();
        echo $execval;
        echo "data inserted successfully...";
        $stmt->close();
        $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardOwner = $_POST["username"];
    $cardNumber = $_POST["cardNumber"];
    $expirationMonth = $_POST["expirationMonth"];
    $expirationYear = $_POST["expirationYear"];
    $cvv = $_POST["cvv"];
    
    if (!empty($cardOwner) && !empty($cardNumber) && !empty($expirationMonth) && !empty($expirationYear) && !empty($cvv)) {
        // Process payment (e.g., connect to payment gateway, validate payment, etc.)
        // For demo purposes, simply echo the payment details
        echo "Payment Details: <br>";
        echo "Card Owner: " . $cardOwner . "<br>";
        echo "Card Number: " . $cardNumber . "<br>";
        echo "Expiration Date: " . $expirationMonth . "/" . $expirationYear . "<br>";
        echo "CVV: " . $cvv . "<br>";
        echo "Payment processed successfully!";
    } else {
        echo "Please fill in all required fields.";
    }
} else {
    header("Location: payment_form.php");
    exit();
}
?>
