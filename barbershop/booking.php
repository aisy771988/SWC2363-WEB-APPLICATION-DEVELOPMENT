<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="style2.css">
	
</head>
<body>
<?php include ("header.php");?>
<?php
			//This query inserts a record in the user table
			//has form been submitted?
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				//initialize an error array
				$error = array();
				
				//check for a full name
				if (empty($_POST['Name']))
				{
					$error [] = 'You forgot to enter your Name.';
				}
				else
				{
					$n = mysqli_real_escape_string($connect, trim ($_POST['Name']));
				}
				
				
				//check for a email
				if (empty($_POST['Email_B']))
				{
					$error [] = 'You forgot to enter your Email.';
				}
				else
				{
					$e = mysqli_real_escape_string($connect, trim ($_POST['Email_B']));
				}
				
        //check for a phone number
				if (empty($_POST['PhoneNumber']))
				{
					$error [] = 'You forgot to enter your Phone Number.';
				}
				else
				{
					$pn = mysqli_real_escape_string($connect, trim ($_POST['PhoneNumber']));
				}

                //check for a email
				if (empty($_POST['Barber']))
				{
					$error [] = 'You forgot to enter your Barber.';
				}
				else
				{
					$b = mysqli_real_escape_string($connect, trim ($_POST['Barber']));
				}

                //check for a email
				if (empty($_POST['Date']))
				{
					$error [] = 'You forgot to enter your Date.';
				}
				else
				{
					$d = mysqli_real_escape_string($connect, trim ($_POST['Date']));
				}
				
				//if it runs
				if (empty($error)){
				//register the user in the database
				//make the query:
				$q = "Insert INTO list (ID_B, Name, Email_B, PhoneNumber, Barber, Date) VALUES (' ', '$n', '$e', '$pn', '$b', '$d')";
				//run the query
				$result = @mysqli_query ($connect, $q);
				{
					echo '<h2>Thank you For registering</h2>';
					echo '<a href="bookinglist.php">Go To Booking List</a>';
					
				}
				}	else{
				echo '<p class ="error"> The following error (s) occured: <br/>';
				foreach ($error as $msg)
				{
					echo " -$msg<br/> \n";
				}
					echo '</p><p>Please try again.</p>';

				}
				
				
				//close the database connection.
				mysqli_close($connect);
				exit();
			}
			
				
		?>

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

    <div class="container2">

        <form action="booking.php" method="post">
    
            <div class="row">
    
                <div class="col">
    
                    <h3 class="title">booking form</h3>
    
                    <div class="inputBox">
                        <span>Name :</span>
                        <input id="Name" name="Name" type="text" placeholder="ahmad">
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input id="Email_B" name="Email_B" type="text" placeholder="example@example.com">
                    </div>
                    
                    <div class="inputBox">
                        <span>Phone Number :</span>
                        <input id="PhoneNumber" name="PhoneNumber" type="text" placeholder="012-3456798">
                    </div>
                    <div class="inputBox">
                        <span>Barber :</span>
                        <select id="Barber" name="Barber">
							<option value=""></option>
                            <option value="captain">CAPTAIN</option>
                            <option value="maynpower">MAYNPOWER</option>
                            <option value="brochol">BROCHOL</option>
                            <option value="hoho">HO-HO</option>
                            <option value="jiy">JIY</option>
                          </select>
                    </div>
                    <div class="inputBox">
                        <span>Date :</span>
                        <input id="Date" name="Date" type="date" placeholder="">
                    </div>
                    
    
                </div>
    
        
            </div>
    
            <input id ="submit" type="submit" class="submit" name="submit" value="Confirm">
			<a href="bookinglist.php" style="margin-left: 250px">Go To Booking List</a>
    
        </form>
		
    </div> 

    <footer class="footer">
        <h3><span id="demo">&copy;</span><a href="#">2022 dsbarbershop.com</a></h3>
    </footer>
    
</body>


<script src="js/index.js"></script>
</html>