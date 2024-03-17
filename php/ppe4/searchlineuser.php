<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Recherche avancé</title>
</head>
<body style="background-color: grey;">
<center>
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
<section>
<div class="form_box">
            <div class="form_value">
            <form action="">
            <div class="register">
            <?php
            if($_SESSION['testmod1'] == 1){
                echo '<p>Retour à la <a href="affichageusersearch.php">Page de recherche</a></p>';
            }else if($_SESSION['testmod1'] == 0){
                echo "<p>Retour à la <a href='../../indexpatron.php'>Page d'accueil</a></p>";
            }
            ?>
            </div>
        </form>

    <?php
    include("../../src/logbdd.php"); 
    if($_SESSION['testmod1'] == 1){
        $a = protect($_GET['id']);
    }else if($_SESSION['testmod1'] == 0){
        $a = protect($_POST['id']);
    }
    $requete = "select * from staff where id='$a'";
    $resultat=mysqli_query($conn,$requete);
                echo "<h1>Voici les information concernant l'utilisateur login $a</h1>";
                $enreg=mysqli_fetch_array($resultat);

                echo '<table><tr><td>ID</td><td>Nom</td><td>Prénom</td><td>Date de Naissance</td><td>Salaire</td><td>Login</td><td>Mot de Passe</td><td>Sexe</td><td>Fonction</td></tr>';
                echo '<tr>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["id"].'" readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["first_name"].'"readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["last_name"].'" readonly></td>';
                echo '<td><input class="inputbox" type="date" value="'.$enreg["date_of_birth"].'" readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["salarie"].'"readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["login"].'" readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["password"].'"readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["sexe"].'"readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["fonction"].'"readonly></td>';


                echo '</tr></table>';
    mysqli_close($conn);
    ?>
    </center>
            </div></div></section>  
</body>
</html>