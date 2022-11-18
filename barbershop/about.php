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
                    <li><a href="about.php" class="current-page">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="index.php?page=cart" class="fas fa-shopping-cart">Cart</a></li>
                </ul>

            </nav>
        </div>
    </header>

    <main class="about">
        <div class="about-header">
            <h1>About us</h1>
        </div>
        <div class="about-content">
            <p>DsBarbershop is a unique barbershop that have trained their barber's in a social requirements in order
                to struck conversation with their customers,thus this make DsBarbershop very unique in terms of their
                customer service.</p>
        </div>
    </main>

    <footer class="footer">
        <h3><span id="demo">&copy;</span><a href="#">2022 dsbarbershop.com</a></h3>
    </footer>

    <script src="js/index.js"></script>
</body>

</html>