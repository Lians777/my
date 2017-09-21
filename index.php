<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pirma";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM zinutes order by id DESC LIMIT 5";
$result = mysqli_query($conn, $sql);

$zinutes = [];

$for = mysqli_num_rows($result);

if ($for > 0) {


	for ($i=0; $i <$for ; $i++) { 
			$row = mysqli_fetch_assoc($result);
		
	echo"
	<b>".$row['autorius']."</b> ".$row['zinute']."<i>[".date("Y-m-d H:i:s", $row['data'])."]</i><hr>";
	}
} else {
	echo "Žinučių nėra.<hr>";
}

	
		
	    echo "
	<form action='siusti.php' method='POST'>
		Vardas: <input type='text' name='vardas' /><br>
		Zinute: <input type='text' name='zinute' /><br><br>

		<input type='submit' value='siusti' />




	</form>
	";


mysqli_close($conn);
include"mysql.php";
include"siusti.php";
?>