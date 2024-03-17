<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tplogin/searchelevephp.css">
    <title>Recherche Eleve</title>
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
                <p>Retour à la <a href="../../html/tplogin/registerelevehtml.php">Page d'enregistrement</a></p>
            </div>
        </form>
        <center>
    <?php
        include("../../src/logbdd.php");    

        $a = $_POST["num_eleve"];
        $a = protect($a);
        $requete = "select * from eleve where num_eleve='$a'";
        $result = mysqli_query($conn,$requete);

        echo ("Voici la requete effectuée :"." ".$requete);
    $resultat=mysqli_query($conn,$requete);
    if (mysqli_affected_rows($conn)){
        
                echo "<h1>Voici les information concernant l'élève id n° $a</h1>";
    }
    else{
        echo "<h1> Echec de la requête $requete, l'élève avec cet id = $a n'existe pas</h1>";
        echo mysqli_error($connexion);
    }
    ?>
    
    <table border=1>
        <tr>
            <td>num_eleve</td>
            <td>name_eleve</td>
            <td>numtel_eleve</td>
            <td>adresse_eleve</td>
        </tr>

        <?php

        while($enreg=mysqli_fetch_array($result))
        {
        ?>
        <tr>
            <td>
                <?php
                    echo $enreg["num_eleve"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["name_eleve"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["numtel_eleve"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["adresse_eleve"];
                ?>
            </td>
            
        </tr>
        

        <?php } ?>
        </center>
            </div></div></section>  
    
    </table>
    <?php 
        mysqli_close($conn);
    ?>
</body>
</html>