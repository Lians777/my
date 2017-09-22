<?php 

$vardas = $_POST['vardas'];
$zinute = $_POST['zinute'];

if (strlen($vardas) < 2) { $er = "Klaida, vardas per trumpas!"; }
elseif (strlen($zinute) < 10) { $er = "Klaida, zinute per trumpa!"; }
else {
	mysqli_query("INSERTO INTO zinutes
		(autorius,zinute,data) VALUES ('$vardas','$zinute','".time()."')
		") or die (mysqli_error());
	$er = "";

}

if ($er != "") {
	echo $er;
} else {
	header("Location: index.php");
}

include"mysql.php";

 ?>