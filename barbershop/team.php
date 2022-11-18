<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
                    <li><a href="team.php" class="current-page">Team</a></li>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="index.php?page=cart" class="fas fa-shopping-cart">Cart</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <main class="team">
        <div class="team-container">
            <div class="team-header">
                <h1>DS Crew</h1>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <img src="captain.png" alt="" style="width: 100%">
                <h3>CAPTAIN</h3>
                <p>Head Barber & Owner</p>
            </div>
            <div class="column">
                <img src="maynpower.png" alt="" style="width: 100%">
                <h3>MAYNPOWER</h3>
                <p>Head Barber</p>
                <img src="kc.jpeg" alt="" style="width: 100%">
                <h3>KC</h3>
                <p>Marketing</p>
            </div>
            <div class="column">
                <img src="brochol.png" alt="" style="width: 100%">
                <h3>BROCHOL</h3>
                <p>Barber</p>
                <img src="jiy.png" alt="" style="width: 100%">
                <h3>JIY</h3>
                <p>Barber</p>
            </div>
            <div class="column">
                <img src="hoho.png" alt="" style="width: 100%">
                <h3>HO-HO</h3>
                <p>Barber</p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <h3><span id="demo">&copy;</span><a href="#">2022 dsbarbershop.com</a></h3>
    </footer>
    <script src="js/index.js"></script>
</body>

</html>