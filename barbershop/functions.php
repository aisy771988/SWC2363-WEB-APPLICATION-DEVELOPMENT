<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'barbershop';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link rel="stylesheet" href="style6.css" >
        <link rel="stylesheet" href="style5.css" >
        <link rel="stylesheet" href="style2.css" >
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
        <div class="container container-nav">
            <div class="site-title">
                <h1><img src ="logo.png" height="60">DSBarbershop</h1>
                <p class="subtitle">Getting your hair ready</p>
            </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?page=products">Products</a></li>
                        <li><a href="team.php">Team</a></li>
                        <li><a href="booking.php">Booking</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        
                    </ul>
                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
					</a>
                </div>
            </div>
        </header>
        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, dsbarbershop.com</p>
            </div>
        </footer>
    </body>
</html>
EOT;
}
?>