<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tplogin/affichageelevespecial.css">
    <title>Affichage spécial</title>
</head>
<body>
<center>
    <?php
        include("../../src/logbdd.php");    


        $requete = "select * FROM eleve";
        $result = mysqli_query($conn,$requete);
        echo ("Le nombre d'élèves :"." ".mysqli_num_rows($result));
    ?>
</center>
<section>
            <div class="form_box">
            <div class="form_value">
    <table border="1" style="color:white;">
        <tr>
            <td>num_eleve</td>
            <td>name_eleve</td>
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
            <form method="post" action="deleteeleveline.php">
            <td>
                <?php
                echo"<a style='color: white; background-color: red; font-weight: bold; text-decoration: none; border : 2px solid red;' href='deleteeleveline.php?num_eleve=".$enreg['num_eleve']."''>Supprimer</a>";
                ?>
            </td>
            </form>
        </tr>
        

        <?php } ?>
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

        
    </table>
    </div></div>
        </section>
    <?php 
        mysqli_close($conn);
    ?>
    
</body>
</html>