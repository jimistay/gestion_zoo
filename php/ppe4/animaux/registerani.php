<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crée un animal</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['log'])==false){
        header('location:../../../disconnected.html');
    }
    ?>

	<?php
	include("../../../src/logbdd.php");

	// $id auto-Increment
	$a = protect($_POST['dob']);
	$b = protect($_POST['name']);
	$c = protect($_POST['com']);
	$d = protect($_POST['sexe']);
	$e = protect($_POST['spe']);


	$req = "select * from animal where name='$b' and id_specie='$e'";
	$r = mysqli_query($conn,$req);
	if (mysqli_affected_rows($conn)){
		echo "<body style='background-color: red; margin: 40vh'><center><section>
		<div class='form_box'>
			<div class='form_value'>
			<h3>L'animal avec ce nom et cette espèce : $e et Nom : $b existe déjà</h3>
				<form action=''>
					<div class='register'>
						<p>Retour à la <a href='../../../indexpatron.php'>Page d'accueil</a></p>
					</div>
				</form>
			</div>
		</div>
			</section></center></body>";

	}else{
		$req1 = "INSERT INTO animal VALUES ('','$a', '$b', '$c', '$d', '$e')";
		$r1 = mysqli_query($conn,$req1);
		echo "<body style='background-color: green; margin: 40vh'><center><section>

		<div class='form_box'>
			<div class='form_value'>
			<h3>L'animal à bien été crée</h3>
				<form action=''>
					<div class='register'>
						<p>Retour à la <a href='../../../indexpatron.php'>Page d'accueil</a></p>
					</div>
				</form>
			</div>
		</div>
			</section></center></body>";

	}
	



	mysqli_close($conn);
	?>

</body>