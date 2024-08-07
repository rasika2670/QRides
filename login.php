<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRide</title>
    <link rel="icon" href="./Images/2.png" type="image/icon type"/>
    <link rel="stylesheet" href="./tailwind/output.css" />
    <link rel="stylesheet" href="main.css" />    
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
    
        @media(max-width: 600px)    
        {
            main{
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
            }
        }
        
        </style>
</head>
<body class="flex flex-col gap-0 bg-Twhite text-Bpurple w-[100vw] font-rubik">  
    <nav class="bg-Bpurple w-[100%] text-Twhite flex items-center justify-between font-rubik px-[50px] sm:h-[80px] lg:h-[60px]">
        <div class="block sm:hidden">
            <a href="javascript:history.back()"><i data-feather="arrow-left"></i></a>
        </div>
        <div class="h-[auto] flex flex-row items-center ">
            <a href="index.html"><img src="./Images/logo.jpg" style="height: 60px;" alt="logo"></a>
        
            <div class="hidden sm:flex flex-row flex-wrap flex-grow gap-6 max-w-[700px] justify-between mx-12 lg:flex">
                <a href="home.html" class="flex flex-col items-center text-xs"><i data-feather="home" class="size-5"></i><span>Home</span></a>
                <a href="navig.html" class="flex flex-col items-center text-xs"><i data-feather="map" class="size-5"></i><span>Navigation</span></a>
                <a href="help.html" class="flex flex-col items-center text-xs"><i data-feather="cloud" class="size-5"></i><span>Support</span></a>
                <button id="notificationBtn" class="notification-btn flex flex-col items-center text-xs"><i data-feather="bell" class="size-5"></i><span>Notification</span></button>
            </div> 
        </div>
        <div class="flex items-center">
            <a href="login.html"><div class="h-8 w-8 items-end justify-center rounded-[50%] overflow-hidden hidden sm:flex " style="border: 2px solid;">
                <i class="fa-solid fa-user text-2xl m-[-1px]"></i>
            </div></a>
            <div id="hamburger" class="sm:hidden ml-4">
                <i id="toggleSidebar" data-feather="menu" class="size-6 font-extrabold cursor-pointer font-white text-white"></i>
            </div>
        </div>
    </nav>
    
    <div id="notificationCard" class="notification-card  bg-[#00000080] z-10 hidden bg-Tpurple bg-opacity-75 fixed top-0 left-0 w-full h-full flex justify-center items-center">
        <div class="notification-content bg-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-4">Notification</h2>
            <p class="text-lg mb-4">Your notification message goes here...</p>
            <button id="closeNotificationBtn" class="btn bg-Tpurple text-white px-4 py-2 rounded-md hover:bg-opacity-90">Close</button>
        </div>
    </div>
    
    <!-- sidebar -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-10 hidden"></div>
    <div id="sidebar" class="bg-gray-900 text-white h-full w-64 fixed top-0 right-0 z-10 transform translate-x-full transition-transform duration-300 ease-in-out">
        <ul class="py-8 ">
            <li><a href="home.html" class="block px-4 py-2 text-sm hover:bg-gray-800">Home</a></li>
            <li><a href="navig.html" class="block px-4 py-2 text-sm hover:bg-gray-800">Navigation</a></li>
            <li><a href="help.html" class="block px-4 py-2 text-sm hover:bg-gray-800">Support</a></li>
            <li><a href="#" id="closeSidebar" class="block px-4 py-2 text-sm hover:bg-gray-800">Close</a></li>
            <li><a href="login.html" class="block px-4 py-2 text-sm hover:bg-gray-800">Profile</a></li>

        </ul>
    </div>
    
    <main class="flex">
        <div class="w-[90%] flex flex-col justify-center items-center sm:w-[60%]">
            <div id="login-form" class="flex flex-col items-center">
                <p class="font-extrabold text-[2.25rem] max-sm:mt-4">Login...</p>
                <p class="text-sm  text-Lpurple">Sign in to Continue</p>
                <div class="flex items-center">
                    <div class="h-8 w-8 flex items-end justify-center rounded-[50%] overflow-hidden" style="border: 2px solid;">
                        <i class="fa-solid fa-user text-Bpurple text-2xl m-[-1px]"></i>
                    </div>
                    <input type="text" placeholder="Name" class="m-2 p-1 pl-4 rounded-[30px]" style="border: 1px solid;">
                </div>
                <div class="flex items-center">
                    <div class="h-8 w-8 flex items-center justify-center rounded-[50%] overflow-hidden" style="border: 2px solid;">
                        <i class="fa-solid fa-lock text-Bpurple text-xl"></i>
                    </div>
                    <input type="password" placeholder="Password" class="m-2 p-1 pl-4 rounded-[30px]" style="border: 1px solid;">
                </div>
                <a href="owner.html">
                    <button class="bg-Bpurple text-Twhite m-2 w-[100px] p-1 rounded-[30px] hover:bg-opacity-[80%] active:bg-opacity-[100%] transition-all duration-100">Login</button>
                </a>
                <p class="text-sm text-Lpurple">Forgot password ?</p>
                <a href="#" id="toggle-signup">
                    <p class="text-sm font-semibold text-Lpurple hover:text-NBlue hover:underline transition-all duration-100">Sign up!</p>
                </a>
            </div>
            <div id="signup-form" class="hidden container mx-auto max-w-[500px] mt-4 p-4">
                <h2 class="text-2xl font-extrabold text-center">Create New Account</h2>
                <div class="mx-auto flex justify-center items-center">
                    <p class="text-center text-sm text-Lpurple">Already registered ? </p>
                    <a href="login.html">
                        <p class="text-center text-sm text-Lpurple font-semibold hover:text-NBlue hover:underline transition-all duration-100">Login</p>
                    </a>
                </div>
                <form action="#" method="post" >
                    <div class="my-4">
                        <label for="name" class="block font-semibold">
                            Name:
                        </label>
                        <input type="text" id="name" name="name" placeholder="Name" class="w-full px-3 py-2 border rounded-md 
                        focus:outline-none focus:border-Bpurple drop-shadow" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block font-semibold ">
                            Email:
                        </label>
                        <input type="email" id="email" name="email" placeholder="Email" class="w-full px-3 py-2 border rounded-md 
                        focus:outline-none focus:border-Bpurple drop-shadow" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block font-semibold ">
                            Phone no.:
                        </label>
                        <input type="number" id="mobile" name="mobile" placeholder="Phone no." class="w-full px-3 py-2 border rounded-md 
                        focus:outline-none focus:border-Bpurple drop-shadow" required>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block font-semibold ">
                            Address:
                        </label>
                        <input type="text" id="address" name="address" placeholder="Address" class="w-full px-3 py-2 border rounded-md 
                        focus:outline-none focus:border-Bpurple drop-shadow" required>
                    </div>
                    <div class="mb-4">
                        <label for="liscence" class="block font-semibold ">
                            Liscence no.:
                        </label>
                        <input type="number" id="liscence" name="liscence" placeholder="Liscence" class="w-full px-3 py-2 border rounded-md 
                        focus:outline-none focus:border-Bpurple drop-shadow" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block font-semibold ">
                            Password:
                        </label>
                        <input type="password" id="password" name="pass1" placeholder="Password" class="w-full px-3 py-2 border rounded-md 
                        focus:outline-none focus:border-Bpurple drop-shadow" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block font-semibold ">
                            Confirm Password:
                        </label>
                        <input type="password" id="password" name="pass2" placeholder="Confirm Password" class="w-full px-3 py-2 border rounded-md 
                        focus:outline-none focus:border-Bpurple drop-shadow" required>
                    </div>
                    <input type="submit" value="Submit" class="w-[50%] bg-Bpurple text-Twhite font-semibold text-xl py-1 px-4 m-4 rounded-3xl 
                        hover:bg-opacity-[90%] transition duration-100">
                    
                </form>
                <a href="owner.html" class="mb-6 mx-auto flex justify-center items-center">
                        <button type="submit" class="w-[50%] bg-Bpurple text-Twhite font-semibold text-xl py-1 px-4 m-4 rounded-3xl 
                        hover:bg-opacity-[90%] transition duration-100">
                            Sign Up
                        </button>
                    </a>
            </div>
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

    //1.
    feather.replace()
    
    

    //2.
    // Function to toggle sidebar
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


    //3.
    document.addEventListener('DOMContentLoaded', function() {
        const notificationBtn = document.getElementById('notificationBtn');
        const notificationCard = document.getElementById('notificationCard');
        const closeNotificationBtn = document.getElementById('closeNotificationBtn');
    
        // Show notification card when the button is clicked
        notificationBtn.addEventListener('click', function() {
            notificationCard.classList.remove('hidden');
        });
    
        // Hide notification card when close button is clicked
        closeNotificationBtn.addEventListener('click', function() {
            notificationCard.classList.add('hidden');
        });
    
        // Hide notification card when clicking outside of it
        window.addEventListener('click', function(event) {
            if (event.target === notificationCard) {
                notificationCard.classList.add('hidden');
            }
        });
    });
    //2
    const loginForm = document.getElementById("login-form");
    const signupForm = document.getElementById("signup-form");
    
    document.getElementById("toggle-signup").addEventListener("click", function(event) {
        loginForm.classList.add('hidden');
        signupForm.classList.remove('hidden');
    });
    
    document.getElementById("toggle-login").addEventListener("click", function(event) {
        signupForm.classList.add('hidden');
        loginForm.classList.remove('hidden');
    });
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
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $license = $_POST['license'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    // Check if passwords match
    if ($pass1 !== $pass2) {
        echo "<p>Passwords do not match.</p>";
        exit();
    }

    // Insert data into the signup table
    $sql = "INSERT INTO signup (Name, Mobile, Email, Address, License, Pass1, Pass2) VALUES ('$name', '$mobile', '$email', '$address', '$license', '$pass1', '$pass2')";

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