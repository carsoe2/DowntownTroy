
<?php
	session_start();
	$servername = "localhost";
	$db = "RTAN";
	$user = "phpmyadmin";
	$pass = "fuYj23K36g@7";
	$ename = $_POST['event_name'];
	$elocation = $_POST['location'];
	$edescription = $_POST['event_description'];
	$edate = $_POST['event_date'];
	$uname = $_SESSION['uname'];
  	
	$conn;
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$db", "$user", "$pass");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if (isset($_POST['submit'])) {

			$query = "INSERT INTO `events` (`event_name`, `location`,`event_date`, `event_date_string`, `event_description`, `uname`) VALUES (?,?,?,?,?,?);";
			$stmt = $conn->prepare($query);

			$sec = strtotime($edate);
			$date = date('m-d-Y H:i', $sec);

			$stmt->execute([$ename, $elocation, $edate, $date, $edescription, $uname]);
		
			header("Location: events.php");
		}

	} catch (PDOException $e) {

		$eMessage = $e;
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="troy.css">
	<link rel="icon" href="resources/downtowntroylogo.jpg">
	<title>Downtown Troy</title>
</head>

<body>

	<?php include("navbarbase.php")?>
	<div class="container" style="width: 50%; margin-top: 5px;" >

		<div class="h3 text-center mb-5">
			Add an event
		</div>
		<form class="addEvent" method="POST">
			<div class="name">
				<label for="event_name" class="form-label">Event Name</label>
				<input type="text" class="form-control" id="event_name" name="event_name" required>
			</div>
			<br>
			<div class="date">
				<label for="event_date" class="form-label">Event Date</label>
				<input type="datetime-local" class="form-control" id="event_date" name="event_date" required>
			</div>
			<br>
			<div class="location">
				<label for="location" class="form-label">Event Location</label>
				<input type="text" class="form-control" id="location" name="location" required>
			</div>
			<br>
			<div class="desc">
				<label for="event_description" class="form-label">Event Description</label>
				<textarea type="text" class="form-control" id="event_description" name="event_description" rows="4" required></textarea>
			</div>
			<br>
			<button class="btn" name="submit" onclick="window.location='./events.php'">Submit Event</button>
			<br>
		</form>

	</div>

	<?php include('foot.php');?>
