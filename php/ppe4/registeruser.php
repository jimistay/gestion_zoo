<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crée un Employé</title>
</head>
<body>
<?php
    session_start();
    if($_SESSION['fonc']!='boss'){
        $_SESSION['deco']=0;
        header("location:logout.php"); 
    }
    ?>
	        <?php
    if(isset($_SESSION['log'])==false){
        header('location:../../disconnected.html');
    }
    ?>
	<?php
	include("../../src/logbdd.php");

	// $id auto-Increment
	$a = protect($_POST['fname']);
	$b = protect($_POST['lname']);
	$c = protect($_POST['dob']);
	$d = protect($_POST['sal']);
	$e = protect($_POST['log']);
	$f = protect($_POST['pwd']);
	$g = protect($_POST['sexe']);
	$h = protect($_POST['fonction']);

	$req = "select * from staff where login='$e' and first_name='$a' and last_name='$b' and password='$f'";
	$r = mysqli_query($conn,$req);
	if (mysqli_affected_rows($conn)){
		echo "<body  style='background-color : red; margin: 40vh;'><section>
		<center>
		<div class='form_box'>
			<div class='form_value'>
			<h3>La personne avec ce Login : $e, Nom : $a, Prenom : $b existe déjà</h3>
				<form action=''>
					<div class='register'>
						<p>Retour à la <a href='../../indexpatron.php'>Page d'accueil</a></p>
					</div>
				</form>
			</div>
		</div>
		</center>
			</section></body>";

	}else{
		$req1 = "INSERT INTO staff VALUES ('','$a', '$b', '$c', '$d', '$e', '$f', '$g','$h')";
		$r1 = mysqli_query($conn,$req1);
		echo "<body  style='background-color : green; margin: 40vh;'><section>
		<center>
		<div class='form_box'>
			<div class='form_value'>
			<h3>L'employé à bien été crée</h3>
				<form action=''>
					<div class='register'>
						<p>Retour à la <a href='../../indexpatron.php'>Page d'accueil</a></p>
					</div>
				</form>
			</div>
		</div>
		</center>
			</section></body>";

	}
	



	mysqli_close($conn);
	?>

</body>