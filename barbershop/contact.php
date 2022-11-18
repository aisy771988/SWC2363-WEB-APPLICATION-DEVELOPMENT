<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style5.css">
</head>

<body>
<?php include ("header.php");?>
    <header class="header">
        <img src ="logo.png" height="60">
        <div class="container container-nav">
            <div class="site-title">
                <h1>DSBarbershop</h1>
                <p class="subtitle">Getting your hair ready</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?page=products">Product</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php" class="current-page">Contact</a></li>
                    <li><a href="index.php?page=cart" class="fas fa-shopping-cart">Cart</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <main class="contact">
        <h1>Contact Us</h1>
        <div class="flex-container">
            <div class="flex-item-left">
                <h4>We are located at</h4>
                <p>No.21, 1, Jalan Setiawangsa 8</p>
                <p>Setiawangsa, 54200 Kuala Lumpur</p>
                <h4>Phone</h4>
                <p>018-363 7417</p>
                <h4>Socials</h4>
                <p>Instagram : @ds.barbershop</p>
                <p>Telegram  : @dsbarbershopsetiawangsa</p>
            </div>
            <div class="flex-item-right">
                <form action="">
                    <input type="text" id="fname" placeholder="Your Name">
                    <input type="text" name="subject" id="subject" placeholder="Subject">
                    <textarea name="" id="textarea" cols="30" rows="10"></textarea>
                    <button type="button">Send Message</button>
                </form>
            </div>
        </div>
    </main>
    <footer1 class="footer">
        <h3><span id="demo">&copy;</span><a href="#">2022 dsbarbershop.com</a></h3>
    </footer1>

    <script src="js/index.js"></script>
</body>

</html>