<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crée une espèce</title>
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
	$a = protect($_POST['name']);
	$b = protect($_POST['lt']);
	if(isset($_POST['aqua'])==true){
		$c = protect($_POST['aqua']);
	}else{
		$c = 0;
	}
	$d = protect($_POST['tof']);


	$req = "select * from specie where name='$a' and lifetime='$b'";
	$r = mysqli_query($conn,$req);
	if (mysqli_affected_rows($conn)){
		echo "<body style='background-color: red; margin: 40vh'><center><section>
		<div class='form_box'>
			<div class='form_value'>
			<h3>L'espèce avec ce nom : $a existe déjà</h3>
				<form action=''>
					<div class='register'>
						<p>Retour à la <a href='../../../indexpatron.php'>Page d'accueil</a></p>
					</div>
				</form>
			</div>
		</div>
			</section></center></body>";

	}else{
		$req1 = "INSERT INTO specie VALUES ('','$a', '$b', '$c', '$d')";
		$r1 = mysqli_query($conn,$req1);
		echo "<body style='background-color: green; margin: 40vh'><center><section>

		<div class='form_box'>
			<div class='form_value'>
			<h3>L'espèce à bien été crée</h3>
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