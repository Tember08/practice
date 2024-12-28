<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Aj Resort - Header</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css"> <!-- Link to the header CSS file -->
</head>

<body>
    <!-- Loading Screen -->
    <div id="loading-screen" class="loading-screen">
        <div class="spinner"></div>
    </div>

    <header>
        <!-- Left Section: Logo and Secret Aj Resort text -->
        <div class="left">
            <div class="logo"></div> <!-- Circular logo with image -->
            <span class="logo-text">Secret Aj Resort</span>
        </div>

        <!-- Center Section: Navigation links -->
        <div class="center header-menu">
            <a href="../secretaj/home.php">Home</a>
            <a href="../secretaj/booking.php">Booking</a>
            <a href="../secretaj/transaction.php">Transaction</a>
            <a href="../secretaj/settings.php">Settings</a>
        </div>

        <!-- Right Section: Login | Sign Up -->
        <div class="right">
            <a href="#">Login</a> | <a href="#">Sign Up</a>
        </div>

        <!-- Hamburger Menu -->
        <div class="hamburger">&#9776;</div>
    </header>

    <!-- External JS File -->
    <script src="../secretaj/togglemenu.js"></script> <!-- Link to the external JS file -->
</body>
</html>
