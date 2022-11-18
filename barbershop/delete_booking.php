<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
        <link rel="stylesheet" href="style5.css">
        <style>
            body {
                margin: 100px 100px;
                background: url("background.jpg") no-repeat;
                background-size: cover;
                font-size: 20px;
            }
        </style>
    
	</head>
    

	<body> 
		<?php include ("header.php");?>
		
		<h2>Delete A Record</h2>
		
		<?php
		//look for a valid user id, either through GET or POST
		if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
			$id = $_GET['id'];
		} elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
			$id = $_POST['id'];
		} else {
			echo '<p class ="error">This page has been accessed in error.</p>';
			exit();
		}
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if ($_POST['sure'] == 'Yes') { //Delete the record
				//make the query
				$q = "DELETE FROM list WHERE ID_B=$id LIMIT 1";
				$result = @mysqli_query ($connect, $q);
				
				if (mysqli_affected_rows($connect) == 1) { //if there was no problem
					//display message
					echo '<h3>The record has been deleted.</h3>';
                    echo '<a href="bookinglist.php">Back To Booking List</a>';
				} else {
					//display error messagep
					echo '<p class="error">The record could not be deleted.<br>Probably because it does not exist or due to system error. </p>';
					
					echo '<p>'.mysqli_error($connect).'<br/>Query:'.$q.'</p>';
					//debugging message
				}
			}
			else {
				header("location: bookinglist.php");
			}
		}else {
			//display the form
			//Retrieve the member's data
			$q = "SELECT Name FROM list WHERE ID_B = $id";
			$result = @mysqli_query($connect, $q);
			
			if (mysqli_num_rows($result) == 1)
			{
				//Get the member's data
				$row = mysqli_fetch_array ($result, MYSQLI_NUM);
				echo "<h3>Are sure want to permanently delete $row[0]?</h3>";
				echo '<form action = "delete_booking.php" method = "post">
				<input id = "submit-no" type = "submit" name = "sure" value = "Yes">
				<input id = "submit-no" type = "submit" value = "No">
				<input type = "hidden" name = "id" value = "'.$id.'">
				</form>';
			}
			else
			{
				echo '<p class = "error"> This page has been accessed in error.</p>';
				echo '<p>&nbsp;</p>';
			}
		}
		mysqli_close($connect);
		?>
	</body>
</html>