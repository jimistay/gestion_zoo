<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tplogin/deleteelevephp.css">
    <title>Supprimer un élève</title>
</head>
<body>
<?php
	session_start();
    include("../../src/logbdd.php");

    $c = $_POST['num_eleve'];
	$c = protect($c);

    $requete="delete from eleve where num_eleve='$c'";
    echo ("<center>Voici la requete effectuée :"." ".$requete."</center>");
    $resultat=mysqli_query($conn,$requete);
	
    if (mysqli_affected_rows($conn)){
		$a = $_SESSION["log"];
		$b = $_SESSION["pwd"];
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
		  0 0 151px #FA7070; text-decoration : underline; top : 3px;'> log : $a mdp : $b </h4><br></center>
		<h3>La Suppression de l'élève $c à bien été faite</h3>
			<form action=''>
				<div class='register'>
				<?php
				
					<p>Retour à la <a href='../../html/tplogin/registerelevehtml.php'>Page d'enregistrement</a></p>
				</div>
			</form>
		</div>
	</div>
					</section>";
    }else{

		$a = $_SESSION["log"];
		$b = $_SESSION["pwd"];
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
		  0 0 151px #FA7070; text-decoration : underline; top : 3px;'> log : $a mdp : $b </h4><br></center>
		<h3>Echec de la requête $requete, l'élève n'existe pas</h3>
			<form action=''>
				<div class='register'>
					<p>Retour à la <a href='../../html/tplogin/registerelevehtml.php'>Page d'enregistrement</a></p>
				</div>
			</form>
		</div>
	</div>
					</section>";
        echo mysqli_error($connexion);
    }
mysqli_close($conn);
?>
    
</body>
</html>
