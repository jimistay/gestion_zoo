<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crée un enclos</title>
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

	$aa = protect($_POST['id']);
	$a = protect($_POST['name']);
	$b = protect($_POST['maxcap']);
	if(isset($_POST['aqua'])==true){
		$c = protect($_POST['aqua']);
	}else{
		$c = 0;
	}
	$d = protect($_POST['taille']);
	$e = protect($_POST['id']);
	$f = protect($_POST['id2']);

	$req = "select * from enclos where name='$a' and maxcapacitie='$b'";
	$r = mysqli_query($conn,$req);
	if (mysqli_affected_rows($conn)){
		echo "<body style='background-color: red; margin: 40vh'><center><section>
		<div class='form_box'>
			<div class='form_value'>
			<h3>L'enclos avec ce nom : $a existe déjà</h3>
				<form action=''>
					<div class='register'>
						<p>Retour à la <a href='../../../indexpatron.php'>Page d'accueil</a></p>
					</div>
				</form>
			</div>
		</div>
			</section></center></body>";

	}else{
		$req1 = "INSERT INTO enclos VALUES ('$aa','$a', '$b', '$c', '$d', '$e', '$f')";
		$r1 = mysqli_query($conn,$req1);
		echo "<body style='background-color: green; margin: 40vh'><center><section>

		<div class='form_box'>
			<div class='form_value'>
			<h3>L'enclos à bien été crée</h3>
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