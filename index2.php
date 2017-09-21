<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

include("mysql.php");

$sel = "Select * from zinutes ORDER BY data DESC LIMIT 5";

echo "
<form action='siusti.php' method='POST'>
	Vardas: <input type='text' name='vardas' /><br>
	Zinute: <input type='text' name='zinute' /><br><br>

	<input type='submit' value='siusti' />




</form>
";

?>
</body>
</html>

