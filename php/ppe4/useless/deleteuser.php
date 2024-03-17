
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tplogin/deleteuserphp.css">
    <title>Supprimer un compte</title>
</head>
<body>
<?php
    include("../../src/logbdd.php");

    $c = $_POST['log'];
    $d = $_POST['pwd'];
	$c = protect($c);
	$d = protect($d);

    $requete="delete from user where login='$c' and password='$d'";
    echo ("<center>Voici la requete effectuée :"." ".$requete."</center>");
    $resultat=mysqli_query($conn,$requete);
    
    if (mysqli_affected_rows($conn)){
                echo "<section>
	<div class='form_box'>
		<div class='form_value'>
		<h3>La Suppression du compte $c à bien été faite</h3>
			<form action=''>
				<div class='register'>
					<p>Retour à la <a href='../../html/tplogin/log.html'>Page de connexion</a></p>
				</div>
			</form>
		</div>
	</div>
					</section>";
	}else{
        echo "<section>
	<div class='form_box'>
		<div class='form_value'>
		<h3>Echec de la requête $requete, le compte n'existe pas</h3>
			<form action=''>
				<div class='register'>
					<p>Retour à la <a href='../../html/tplogin/log.html'>Page de connexion</a></p>
				</div>
			</form>
		</div>
	</div>
					</section>";

        echo mysqli_error($connexion);
    }

                
    $lien = ("../../html/tplogin/log.html");

mysqli_close($conn);
?>
</body>
</html>