<!doctype html>
<html>
	<head>
		<meta http-equiv = "Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type= "text/css" href="includes.css"/>
		<link rel="stylesheet" href="style5.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
	<form class="example" action = "recordbooking.php" method = "post" style="margin:auto;margin-top:30px;max-width:300px">
            <input id="Barber" type="text" placeholder="Search.." name="Barber" maxlength = "10" value = "<?php if (isset($_POST['Barber'])) echo $_POST ['Barber']; ?>">
    		<button type="submit" name = "submit"><i class="fa fa-search"></i></button>
    </form>
	<?php include ("header.php");?>

	<?php
		//make the query
		$q = "SELECT ID_B, Name, Email_B, PhoneNumber, Barber, Date FROM list ORDER BY ID_B";
		
		//run the query
		$result = @mysqli_query ($connect, $q);
		
		//if it ran without a problem, display the records
		if($result){
			//table heading
			echo '<table border="2" align="center" style="margin-top: 50px">
		
			<td><b>ID</b></td>
			<td><b>Name</b></td>
			<td><b>Email</b></td>
			<td><b>Phone Number</b></td>
			<td><b>Barber</b></td>
			<td><b>Date</b></td>
			<td><b>Edit</b></td>
			<td><b>Delete</b></td>';
			
			//Fetch and print all the records
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				echo '<tr>
				

				<td>'.$row['ID_B']. '</td>
				<td>'.$row['Name']. '</td>
				<td>'.$row['Email_B']. '</td>
				<td>'.$row['PhoneNumber']. '</td>
				<td>'.$row['Barber']. '</td>
				<td>'.$row['Date']. '</td>
				<td><a href = "edit_booking.php? id='.$row['ID_B'].'">Edit</a></td>
				<td><a href = "delete_booking.php? id='.$row['ID_B'].'">Delete</a></td>
				</tr>';
    	}
			
		//close the table
    	echo '</table>';
			
		//free  up the resources
    	mysqli_free_result ($result);

		} 
		//if failed to run
		else 
		{
			//error message
			echo '<p class = "error"> The current patient could not be retrieved. 
			We apologized for any inconvenience.</p>';
			
			//debuggin message
			echo '<p>' .mysqli_error($connect). '<br><br/>Query: '.$q.' </p>';
		}//end of it ($result)
		
		//close the database connection
		//mqsqli_close($connect);
	?>
	</body>
	<footer class="footer">
        <h3><span id="demo">&copy;</span><a href="#">2022 dsbarbershop.com</a></h3>
    </footer>
</html>