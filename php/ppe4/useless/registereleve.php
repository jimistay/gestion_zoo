<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/tplogin/registerelevephp.css">
	<title>Enregistré</title>
</head>
<body>
	<?php
	session_start();
	include("../../src/logbdd.php");
	
	$a = $_POST['num_eleve'];
	$b = $_POST['name_eleve'];
	$c = $_POST['numtel_eleve'];
	$d = $_POST['adresse_eleve'];

	$a = protect($a);
	$b = protect($b);
	$c = protect($c);
	$d = protect($d);

	$req = "select * from eleve where numtel_eleve='$c'";
	$r = mysqli_query($conn,$req);
	if (mysqli_affected_rows($conn)){
		$t = $_SESSION["log"];
    	$u = $_SESSION["pwd"];
		echo "<section>
	<div class='form_box'>
		<div class='form_value'>
		<center><h4 style='color: white; font-size: 18px;
	text-shadow:
	  0 0 7px #BF6E6E,
	  0 0 10px #BF6E6E,
	  0 0 21px #BF6E6E  ,
	  0 0 42px #FA7070,
	  0 0 82px #FA7070,
	  0 0 92px #FA7070,
	  0 0 102px #FA7070,
	  0 0 151px #FA7070; text-decoration : underline; top : 3px;'> log : $t mdp : $u </h4><br></center>
		<h3>L'élève avec le numéro $c existe déjà</h3>
			<form action=''>
				<div class='register'>
					<p>Retour à la <a href='../../html/tplogin/registerelevehtml.php'>Page d'enregistrement</a></p>
				</div>
			</form>
		</div>
	</div>
			</section>";

	}else{
		$req1 = "INSERT INTO eleve VALUES ('$a', '$b', '$c', '$d')";
		$r1 = mysqli_query($conn,$req1);
		$t = $_SESSION["log"];
    	$u = $_SESSION["pwd"];
		echo "<section>
		<div class='form_box'>
			<div class='form_value'>
			<center><h4 style='color: white; font-size: 18px;
	text-shadow:
	  0 0 7px #BF6E6E,
	  0 0 10px #BF6E6E,
	  0 0 21px #BF6E6E  ,
	  0 0 42px #FA7070,
	  0 0 82px #FA7070,
	  0 0 92px #FA7070,
	  0 0 102px #FA7070,
	  0 0 151px #FA7070; text-decoration : underline; top : 3px;'> log : $t mdp : $u </h4><br></center>
			<h3>L'élève $b bien été enregistrer</h3>
				<form action=''>
					<div class='register'>
						<p>Retour à la <a href='../../html/tplogin/registerelevehtml.php'>Page d'enregistrement</a></p>
					</div>
				</form>
			</div>
		</div>
			</section>";

	}

	mysqli_close($conn);

	?>
</body>