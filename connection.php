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
?>