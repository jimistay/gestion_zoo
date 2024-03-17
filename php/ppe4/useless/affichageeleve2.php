<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tplogin/affichage2elevephp.css">
    <title>Affichage eleve 2</title>
</head>
<body>
<section>
        <div class="form_box">
            <div class="form_value">
            <?php
                    session_start();
                    $a = $_SESSION["log"];
                    $b = $_SESSION["pwd"];
                    echo "<center><h4 style='color: white; font-size: 18px;
                    text-shadow:
                      0 0 7px #BF6E6E,
                      0 0 10px #BF6E6E,
                      0 0 21px #BF6E6E  ,
                      0 0 42px #FA7070,
                      0 0 82px #FA7070,
                      0 0 92px #FA7070,
                      0 0 102px #FA7070,
                      0 0 151px #FA7070; text-decoration : underline;'> log : $a mdp : $b </h4><br></center>";
                    ?>
            <form action="">
            <div class="register">
            
                <p>Retour à la <a href="../../html/tplogin/registerelevehtml.php">Page d'enregistrement</a></p>
            </div>
        </form>
        <center>
<?php

    include("../../src/logbdd.php");

    $requete="select * from eleve";
    $resultat= mysqli_query($conn,$requete);

    echo ("<h2 style='color:white;'>Le nombre d'élèves :"." ".mysqli_num_rows($resultat)."<br><br></h2>");

    while($ligne=mysqli_fetch_assoc($resultat)){
        echo "<h6 style='color:white; font-size:25px;'>";
        echo ($ligne["num_eleve"]." ; ");
        echo ($ligne["name_eleve"]." ; ");
        echo "</h6>";
    }
    mysqli_close($conn);
?>
</center>
            </div></div></section>
    
</body>
</html>