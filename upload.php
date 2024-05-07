<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRide</title>
    <link rel="icon" href="./Images/2.png" type="image/icon type"/>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body class="flex flex-col gap-0 bg-Twhite text-Bpurple w-[100vw] font-rubik">  
    <header class="flex h-14 bg-Bpurple text-Twhite items-center justify-between px-8">
        <div class="flex items-center sm:justify-end ">
            <img src="./Images/logo.jpg" class="h-14 mr-4">
            <ul class="items-center justify-evenly hidden sm:flex">
                <li class="flex flex-col items-center hover:text-Lpurple cursor-pointer transition-all duration-200 relative group w-full h-full">
                    <a href="#" class="m-4">Home</a>
                    <div class="absolute bottom-0 w-full h-1 bg-Lpurple
                    hidden group-hover:block"></div>
                </li>
                <li class="flex flex-col items-center hover:text-Lpurple cursor-pointer transition-all 
                duration-200 relative group w-full h-full">
                    <a href="#" class="m-4">Navigation</a>
                    <div class="absolute bottom-0 w-full h-1 mt-4 bg-Lpurple
                    hidden group-hover:block"></div>
                </li>
                <li class="flex flex-col items-center hover:text-Lpurple cursor-pointer transition-all 
                duration-200 relative group w-full h-full">
                    <a href="#" class="m-4">History</a>
                    <div class="absolute bottom-0 w-full h-1 mt-4 bg-Lpurple
                    hidden group-hover:block"></div>
                </li>
                <li class="flex flex-col items-center hover:text-Lpurple cursor-pointer transition-all 
                duration-200 relative group w-full h-full">
                    <a href="#" class="text-center m-4">Notifications</a>
                    <div class="absolute bottom-0 w-full h-1 mt-4 bg-Lpurple
                    hidden group-hover:block"></div>
                </li>
                <li class="flex flex-col items-center hover:text-Lpurple cursor-pointer transition-all 
                duration-200 relative group w-full h-full">
                    <a href="#" class="text-center m-4">Help</a>
                    <div class="absolute bottom-0 w-full h-1 mt-4 bg-Lpurple
                    hidden group-hover:block"></div>
                </li>
                
                
            </ul>
        </div>
        <div class="h-8 w-8 items-end justify-center rounded-[50%] overflow-hidden hidden sm:flex " style="border: 2px solid;">
            <i class="fa-solid fa-user text-2xl m-[-1px]"></i>
        </div>
        <div id="toggleSidebar" class="h-8 w-8 items-end justify-center flex sm:hidden ">
            <i class="fa-solid fa-bars text-2xl m-[-1px]"></i>
        </div>
    </header>
    <div id="sidebar" class="bg-gray-900 text-white h-full w-64 fixed top-0 right-0 z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
        <ul class="py-8">
            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-800">Profile</a></li>
            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-800">Home</a></li>
            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-800">Navigation</a></li>
            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-800">History</a></li>
            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-800">Notifications</a></li>
            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-800">Help</a></li>
            <li><a href="#" id="closeSidebar" class="block px-4 py-2 text-sm hover:bg-gray-800">Close</a></li>
            <i data-feather="user" class="size-10 relative left-3 mx-6 my-2"></i>
        </ul>
    </div>
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden"></div>

    <main class="flex flex-col  justify-evenly  sm:flex-row transition-all duration-300">
        <div class="max-w-[500px] mt-4 mx-2 p-2">
            <h2 class="text-2xl font-bold">Upload</h2>
            <hr class="bg-Bpurple h-[2px] mb-4">
            <form action="#" method="post" >
                <div class="my-4">
                    <label for="company-name" class="block font-semibold">
                        Company Name:
                    </label>
                    <input type="text" id="company-name" name="company" placeholder="Company Name" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-Bpurple drop-shadow" >
                </div>
                <div class="mb-4">
                    <label for="model" class="block font-semibold ">
                        Model Name:
                    </label>
                    <input type="text" id="model" name="model" placeholder="Model Name" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-Bpurple drop-shadow" >
                </div>
    
                <div class="flex justify-between">
                    <div class="mb-4">
                        <label for="availablity" class="block font-semibold ">
                            Availablity:
                        </label>
                        <input type="text" id="availFrom" name="day_from" placeholder="From" class="w-[98%] mx-1 px-3 py-2 border rounded-md 
                        focus:outline-none focus:border-Bpurple drop-shadow" >
                    </div>
                    <div class="mb-4">
                        <label for="availablity" class="block font-semibold text-Twhite">
                            .
                        </label>
                        <input type="text" id="availTo" name="day_to" placeholder="To" class="w-[98%] mx-1 px-3 py-2 border rounded-md 
                        focus:outline-none focus:border-Bpurple drop-shadow" >
                    </div>
                </div>
    
                <div class="flex justify-between">
                    <div class="mb-4">
                        <label for="time" class="block font-semibold ">
                            Time:
                        </label>
                        <input type="number" id="timeFrom" name="time_from" placeholder="From" class="w-[98%] mx-1 px-3 py-2 border rounded-md 
                        focus:outline-none focus:border-Bpurple drop-shadow" >
                    </div>
                    <div class="mb-4">
                        <label for="time" class="block font-semibold text-Twhite">
                            .
                        </label>
                        <input type="number" id="timeTo" name="time_to" placeholder="To" class="w-[98%] mx-1 px-3 py-2 border rounded-md 
                        focus:outline-none focus:border-Bpurple drop-shadow" >
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="address" class="block font-semibold ">
                        Address:
                    </label>
                    <input type="text" id="address" name="address" placeholder="Address" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-Bpurple drop-shadow" >
                </div>
    
                <div class="mb-4">
                    <label for="password" class="block font-semibold ">
                        Photos:
                    </label>
                    <input type="file" id="photos" name="img" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-Bpurple " >
                </div>
    
                <hr class="bg-Bpurple h-[2px] mb-4">
    
                <h2 class="text-xl font-semibold mb-4">Other Details</h2>
    
                <div class="mb-4">
                    <label for="vehicle" class="block font-semibold ">
                        Vehicle no.:
                    </label>
                    <input type="text" id="vehicle" name="vehicle" placeholder="Vehicle no." class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-Bpurple drop-shadow" >
                </div>
    
                <div class="mb-4">
                    <label for="mileage" class="block font-semibold ">
                        Mileage:
                    </label>
                    <input type="number" id="mileage" name="mileage" placeholder="Mileage" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-Bpurple drop-shadow" >
                </div>
    
                <div class="mb-4">
                    <label for="power" class="block font-semibold ">
                        Power:
                    </label>
                    <input type="number" id="power" name="power" placeholder="PS" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-Bpurple drop-shadow" >
                </div>
    
                <div class="mb-4">
                    <label for="weight" class="block font-semibold ">
                        Weight:
                    </label>
                    <input type="number" id="weight" name="weight" placeholder="Kg" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-Bpurple drop-shadow" >
                </div>
    
                <div class="mb-4">
                    <label for="price" class="block font-semibold ">
                        Price per hour:
                    </label>
                    <input type="number" id="price" name="price" placeholder="Rs." class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-Bpurple drop-shadow" >
                </div>
                
            </form>
            <a href="./owner.html">
            <button type="submit" value="Upload" class="w-[100%] bg-Bpurple text-Twhite font-semibold text-xl py-1 px-4 my-4 rounded-lg 
                    hover:bg-opacity-[90%] transition duration-100 ">Upload</button>
            </a>
        </div>
        
        <img src="Images/Parking-rafiki.png" class="w-[100%] sm:w-[50%] h-[50%] sticky top-0">
    </main>

    <footer class="bg-Bpurple py-[30px] mt-[50px]">
        <div class="max-w-[1170px] m-auto ">
            <div class="flex flex-wrap justify-center sm:flex-row ml-[1rem] ">
                <div class="w-[50%] py-[15px] sm:w-[25%]">
                    <h4 class=" text-[18px] text-Twhite capitalize mb-[35px] font-medium relative border-b-2 border-green-400 max-w-[50px]">company</h4>
                    <ul class="space-y-2 ">
                        <li class="mb-2"><a href="#" class="text-base capitalize no-underline font-light text-Bpink block transition-all duration-300 ease-in-out hover:text-Twhite hover:pl-[8px]">about us</a></li>
                        <li class="mb-2"><a href="#" class="text-base capitalize no-underline font-light text-Bpink block transition-all duration-300 ease-in-out hover:text-Twhite hover:pl-[8px]">our services</a></li>
                        <li class="mb-2"><a href="#" class="text-base capitalize no-underline font-light text-Bpink block transition-all duration-300 ease-in-out hover:text-Twhite hover:pl-[8px]">privacy policy</a></li>
                    </ul>
                </div>

                <div class="w-[50%] py-[15px] sm:w-[25%]">
                    <h4 class=" text-[18px] text-Twhite capitalize mb-[35px] font-medium relative border-b-2 border-green-400 max-w-[50px]	"> <pre class="font-poppins font-medium">Get Help</pre></h4>
                    <ul class="list-none space-y-2">
                        <li class="mb-2"><a href="#" class="text-base no-underline font-light text-Bpink block transition-all duration-300 ease-in-out hover:text-Twhite hover:pl-[8px]">Help</a></li>
                        <li class="mb-2"><a href="#" class="text-base no-underline font-light text-Bpink block transition-all duration-300 ease-in-out hover:text-Twhite hover:pl-[8px]">Contact Us</a></li>
                        <li class="mb-2"><a href="#" class="text-base no-underline font-light text-Bpink block transition-all duration-300 ease-in-out hover:text-Twhite hover:pl-[8px]">Payment Options</a></li>
                    </ul>
                </div>
                
                <div class=" py-[15px] sm:w-[25%]">
                    <h4 class="text-[18px] text-Twhite capitalize mb-[35px] font-medium relative border-b-2 border-green-400 max-w-[50px] "><pre class="font-poppins font-medium">Follow Us</pre></h4>
                    <div class="flex gap-2 flex-wrap">
                        <a href="#" class="flex items-center justify-center h-10 w-10 bg-[#ffffff33] rounded-full text-white hover:text-gray-900 hover:bg-Twhite transition-all duration-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="flex items-center justify-center h-10 w-10 bg-[#ffffff33] rounded-full text-white hover:text-gray-900 hover:bg-Twhite transition-all duration-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="flex items-center justify-center h-10 w-10 bg-[#ffffff33] rounded-full text-white hover:text-gray-900 hover:bg-Twhite transition-all duration-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="flex items-center justify-center h-10 w-10 bg-[#ffffff33] rounded-full text-white hover:text-gray-900 hover:bg-Twhite transition-all duration-300"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        //1. Function to toggle sidebar
        const toggleSidebar = () => {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            sidebar.classList.toggle('translate-x-full');
            overlay.classList.toggle('hidden');
        };
    
        // Event listener for toggling sidebar
        document.getElementById('toggleSidebar').addEventListener('click', toggleSidebar);
    
        // Event listener for closing sidebar when clicking outside of it
        document.getElementById('sidebar-overlay').addEventListener('click', toggleSidebar);
    
        // Event listener for closing sidebar when "Close" link is clicked
        document.getElementById('closeSidebar').addEventListener('click', toggleSidebar);
    </script>

    
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
    $company = $_POST['company'];
    $model = $_POST['model'];
    $day_from = $_POST['day_from'];
    $day_to = $_POST['day_to'];
    $time_from = $_POST['time_from'];
    $time_to = $_POST['time_to'];
    $address= $_POST['address'];
    $img= $_POST['img'];
    $vehicle= $_POST['vehicle'];
    $mileage= $_POST['mileage'];
    $power= $_POST['power'];
    $weight= $_POST['weight'];
    $price	= $_POST['price	'];

    // Check if passwords match
    if ($pass1 !== $pass2) {
        echo "<p>Passwords do not match.</p>";
        exit();
    }

    // Insert data into the signup table
    $sql = "INSERT INTO upload (company, model, day_from, day_to, time_from, time_to, address ,img , vehicle,mileage ,power , weight , price	) 
    VALUES ('$company', '$model', '$day_from', '$day_to', '$time_from', '$time_to', '$address' ,'$img' ,'$vehicle','$mileage','$power', '$weight' , '$price')";

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