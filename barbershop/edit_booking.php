<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Edit Doktor</title>
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
		<?php include ("header.php");?>
		
		<h2> Edit a record </h2>
		
		<?php
		//look for a valid user id, either through GET or POST
		if ((isset ($_GET['id'])) && (is_numeric($_GET['id']))) {
			$id = $_GET['id'];
		} else if ((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
			$id = $_POST['id'];
		} else {
			echo '<p class="error">This page has been accessed in error.</p>';
			exit();
		}
		
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$error = array();
			
			//look for Firstname
			if (empty($_POST['Name'])) {
				$error[] = 'You forgot to enter the Name.';
			} else {
				$n = mysqli_real_escape_string($connect, trim($_POST['Name']));
			}
			
			//look for Email_B
			if (empty($_POST['Email_B'])) {
				$error[] = 'You forgot to enter the Email.';
			} else {
				$e = mysqli_real_escape_string($connect, trim($_POST['Email_B']));
			}
			
			//look for PhoneNumber
			if (empty($_POST['PhoneNumber'])) {
				$error[] = 'You forgot to enter the Phone Number.';
			} else {
				$pn = mysqli_real_escape_string($connect, trim($_POST['PhoneNumber']));
			}
			
			//look for Barber
			if (empty($_POST['Barber'])) {
				$error[] = 'You forgot to enter the Barber.';
			} else {
				$b = mysqli_real_escape_string($connect, trim($_POST['Barber']));
			}

            //look for Barber
			if (empty($_POST['Date'])) {
				$error[] = 'You forgot to enter the Date.';
			} else {
				$d = mysqli_real_escape_string($connect, trim($_POST['Date']));
			}
			
			//if no problem occured
			if (empty($error)) {
				$q = "SELECT ID_B FROM list WHERE Email_B = '$e' AND ID_B != $id";
				
				$result = @mysqli_query($connect, $q);
				
				if (mysqli_num_rows($result) == 0) {
					$q = "UPDATE list SET Name = '$n' , Email_B = '$e', PhoneNumber = '$pn', Barber = '$b', Date = '$d' WHERE ID_B='$id' LIMIT 1";
				
				$result = @mysqli_query($connect, $q);
				
				if (mysqli_affected_rows($connect) == 1) {
					echo '<h3>The user has been edited</h3>';
                    
				} else {
					echo '<p class"error> The user has not be edited due to the system error. We apologize for any convenience.</p>';
					echo '<p>' . mysqli_error($connect) . '<br/> query: ' . $q . '</p>';
				}
			} else {
				echo '<p class="error">The no ic has already been registered</p>';
			}
		} else {
			echo '<p class ="error"> The following error (s) occured: <br/>';
			foreach ($error as $msg)
			{
				echo " -$msg<br/> \n";
		}
		echo '</p><p>Please try again.</p>';
	}
	}
		$q = "SELECT Name, Email_B, PhoneNumber, Barber, Date FROM list WHERE ID_B=$id";
		$result = @mysqli_query ($connect, $q);
		
		if (mysqli_num_rows($result) == 1) {
			//get patient information
			$row = mysqli_fetch_array ($result, MYSQLI_NUM);
			//create the form
			echo '<form action ="edit_booking.php" method="post">
			<p><label class = "label" for="Name"> Name: </label>
			<input id = "Name" type ="text" name="Name" size="30" maxlength="30" value="'.$row[0].'"></p>
			
			<p><br><label class = "label" for="Email_B"> Email : </label>
			<input id = "Email_B" type ="text" name="Email_B" size="30" maxlength="30" value="'.$row[1].'"></p>
				
			<p><br><label class = "label" for="PhoneNumber"> Phone Number: </label>
			<input id = "PhoneNumber" type ="text" name="PhoneNumber" size="30" maxlength="30" value="'.$row[2].'"></p>
				
			<p><br><label class = "label" for="Barber"> Barber: </label> 
			<input id = "Barber" type="text" name="Barber" size="30" maxlength="30" value="' .$row[3].'"></p>

            <p><br><label class = "label" for="Date"> Date: </label> 
			<input id = "Date" type="text" name="Date" size="30" maxlength="30" value="' .$row[4].'"></p>
			
			<br><p><input id ="submit" type="submit" name="submit" value="Edit"></p>
            
			<br><input type="hidden" name="id" value="'.$id.'"/>
			
			</form>';
            echo '<a href="bookinglist.php">Back To Booking List</a>';
		} else {
			echo '<p class="error"> This page has been accessed in error.</p>';
		}
		
		mysqli_close ($connect);
		?>
        <footer class="footer">
        <h3><span id="demo">&copy;</span><a href="#">2022 dsbarbershop.com</a></h3>
    </footer>
	</body>
</html>