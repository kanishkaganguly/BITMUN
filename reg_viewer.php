<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>
</head>
<body>
	<table class="table table-bordered table-hover">
		<tr>
			<th>Name</th>
			<th>College</th>
			<th>Email</th>
			<th>Contact</th>
			<th>D.O.B</th>
			<th>Gender</th>
			<th>Delegate XP</th>
			<th>Exec. XP</th>
			<th>Committee Pref.</th>
			<th>Country Pref. 1</th>
			<th>Country Pref. 2</th>
			<th>Country Pref. 3</th>
			<th>Country Pref. 4</th>
		</tr>
		<?php
		$server="localhost";
		$user="bitotjqk_bitmun";
		$pass="tanishqua";
		$database="bitotjqk_bitmun";

		$con=mysqli_connect($server, $user, $pass, $database) or die('<h1>Database Error</h1>');

		$sql = "SELECT * FROM registration";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
					echo "<td>".$row["fname"]." ".$row["lname"];
					echo "<td>".$row["college"];
					echo "<td>".$row["email"];
					echo "<td>".$row["contact"];
					echo "<td>".$row["dob"];
					echo "<td>".$row["gender"];
					echo "<td>".$row["delegate"];
					echo "<td>".$row["exec"];
					echo "<td>".$row["committee"];
					echo "<td>".$row["country1"];
					echo "<td>".$row["country2"];
					echo "<td>".$row["country3"];
					echo "<td>".$row["country4"];
				echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		$con->close();
		?>
	</table>
</body>
</html>