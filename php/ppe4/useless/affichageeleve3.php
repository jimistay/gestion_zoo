<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tplogin/affichage3elevephp.css">
    <title>Affichage eleve 3</title>
</head>
<body>
<section>
        <div class="form_box">
            <div class="form_value">
            <form action="">
            <div class="register">
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
                <p>Retour à la <a href="../../html/tplogin/registerelevehtml.php">Page d'enregistrement</a></p>
            </div>
        </form>
        <center>
<?php
    
    include("../../src/logbdd.php");

    echo '<form action="" method="post">';
    echo '<h2> Elève </h2>';
    echo '<p> Selectionnez : </p>';
    echo '<select name="numero" size="15" style="width:100%;">';
    $requete="select num_eleve, name_eleve from eleve order by num_eleve";
    $resultat= mysqli_query($conn,$requete);  
    while ($ligne = mysqli_fetch_assoc($resultat)){
        echo '<option value = "' . $ligne["num_eleve"] . '">' . $ligne["name_eleve"].'</option>';
    }
    echo "</select>";
    echo "</form>";
    echo ("Le nombre d'élèves :"." ".mysqli_num_rows($resultat)."<br><br>");
    mysqli_close($conn);


?>
</center>
            </div></div></section>  
    
</body>
</html>