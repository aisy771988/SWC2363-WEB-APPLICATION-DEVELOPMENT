<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="style5.css">
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
                    <li><a href="team.php">Team</a></li>
                    <li><a href="booking.php" class="current-page">Booking</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="index.php?page=cart" class="fas fa-shopping-cart">Cart</a></li>
                </ul>

            </nav>
        </div>
    </header>
<?php
	include("header.php");
?>
	
<h2 style="text-align:center"> Search result </h2>

<?php
	
$b = $_POST ['Barber'];
$b = mysqli_real_escape_string($connect, $b);
	
$q = "SELECT ID_B, Name, Email_B, PhoneNumber, Barber, Date FROM list WHERE Barber = '$b' ORDER BY Barber";
	
$result = @mysqli_query ($connect, $q);
	
if($result)
{
	echo '<table border = "2" align="center">
	<tr><td><b>Barber</b></td>
    <td><b>ID</b></td>
	<td><b>Name</b></td>
	<td><b>Email</b></td>
	<td><b>Phone Number</b></td>
	<td><b>Date</b></td>
	</tr>';
	
	//fetch and display record
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '<tr>
		<td>' .$row['Barber'].'</td>
        <td>' .$row['ID_B'].'</td>
		<td>' .$row['Name'].'</td>
		<td>' .$row['Email_B'].'</td>
		<td>' .$row['PhoneNumber'].'</td>
		<td>' .$row['Date'].'</td>
		</tr>';
	}
	echo '</table>';
	mysqli_free_result($result);
}
else
{
	echo '<p class= "error"> If no record is shown, this is because you had an incorrect or missing entry in search form.<br>Click the back button on the browser and try again.</p>';
	echo '<p>'.mysqli_error($connect).'<br></br>Query :'.$q. '</p>';
}
mysqli_close($connect);
?>
<footer class="footer">
        <h3><span id="demo">&copy;</span><a href="#">2022 dsbarbershop.com</a></h3>
    </footer>
</body>
</html>