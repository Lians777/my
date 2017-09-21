<?php 

$vardas = $_POST['vardas'];
$zinute = $_POST['zinute'];

if (strlen($vardas) < 2) { $er = "Klaida, vardas per trumpas!";}
elseif (strlen($zinute) < 10) { $er = "Klaida, zinute per trumpa!";}
else {
	mysqli_query("INSERTO INTO zinutes");
}


 ?>