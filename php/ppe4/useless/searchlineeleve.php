<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tplogin/searchlineeleve.css">
    <title>Recherche avancé élève</title>
</head>
<body>
<section>
<div class="form_box">
            <div class="form_value">
            <form action="">
            <div class="register">
            <?php
                    session_start();
                    $c = $_SESSION["log"];
                    $d = $_SESSION["pwd"];
                    echo "<center><h4 style='color: white; font-size: 18px;
                    text-shadow:
                      0 0 7px #BF6E6E,
                      0 0 10px #BF6E6E,
                      0 0 21px #BF6E6E  ,
                      0 0 42px #FA7070,
                      0 0 82px #FA7070,
                      0 0 92px #FA7070,
                      0 0 102px #FA7070,
                      0 0 151px #FA7070; text-decoration : underline;'> log : $c mdp : $d </h4><br></center>";
                    ?>
                <p>Retour à la <a href="affichageelevesearch.php">Page de recherche</a></p>
            </div>
        </form>
        <center>
    <?php
    include("../../src/logbdd.php"); 
    $a = $_GET['num_eleve'];
    $a = protect($a);
    $requete = "select * from eleve where num_eleve='$a'";
    $resultat=mysqli_query($conn,$requete);
                echo "<h1>Voici les information concernant l'élève id n° $a</h1>";
                $enreg=mysqli_fetch_array($resultat);

                echo '<table><tr><td>ID</td><td>Nom</td><td>Telephone</td><td>adresse</td></tr>';
                echo '<tr>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["num_eleve"].'" readonly></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["name_eleve"].'"></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["numtel_eleve"].'"></td>';
                echo '<td><input class="inputbox" type="text" value="'.$enreg["adresse_eleve"].'"></td>';
                echo '</tr></table>';
    mysqli_close($conn);
    ?>
    </center>
            </div></div></section>  
</body>
</html>