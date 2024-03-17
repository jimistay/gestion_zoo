<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Recherche avancé user</title>
</head>
<body style="background-color: grey;">
<?php
    session_start();
    if(isset($_SESSION['log'])==false){
        header('location:../../../disconnected.html');
    }
    ?>
<center>
<section>
<div class="form_box">
            <div class="form_value">
            <form action="">
            <div class="register">
            <?php
            if($_SESSION['testmod1A'] == 1){
                echo '<p>Retour à la <a href="affichageanisearch.php">Page de recherche</a></p>';
            }else if($_SESSION['testmod1A'] == 0){
                echo "<p>Retour à la <a href='../../../indexpatron.php'>Page d'accueil</a></p>";
            }
            ?>
            </div>
        </form>

    <?php
    include("../../../src/logbdd.php");
    if($_SESSION['testmod1A'] == 1){
        $a = protect($_GET['id']);
    }else if($_SESSION['testmod1A'] == 0){
        $a = protect($_POST['id']);
    }
    $requete = "select * from animal where id='$a'";
    $resultat=mysqli_query($conn,$requete);
                echo "<h1>Voici les information concernant l'animal login $a</h1>";
                $enreg=mysqli_fetch_array($resultat);

                echo '<table><tr><td>ID</td><td>Date de Naissance</td><td>Nom</td><td>Commentaire</td><td>Sexe</td><td>Espèce</td></tr>';
                echo '<tr>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["id"].'" readonly></td>';
                echo '<td><input class="inputbox" type="date" value="'.$enreg["date_of_birth"].'"readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["name"].'" readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["comment"].'" readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["sexe"].'"readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["id_specie"].'" readonly></td>';
                echo '</tr></table>';
    mysqli_close($conn);
    ?>
    </center>
            </div></div></section>  
</body>
</html>