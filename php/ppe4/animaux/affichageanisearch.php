<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Affichage spécial recherche</title>
</head>
<body style="background-color : grey;">
<?php
    session_start();
    if(isset($_SESSION['log'])==false){
        header('location:../../../disconnected.html');
    }
    ?>
<center>

    <?php
        include("../../../src/logbdd.php");   

        $_SESSION['testmodA'] = 1;
        $_SESSION['testmod1A'] = 1;
        $_SESSION['testmod2A'] = 1;

        $requete = "select * FROM animal";
        $result = mysqli_query($conn,$requete);
        if(isset($_SESSION['returnidfnameA'])==true){
            echo '<p id="ZOOtete"> Modification Enregistrer sur : ';
            echo $_SESSION['returnidfnameA'];
            echo '</p>';
            unset ($_SESSION['returnidfnameA']);
        }
     
        if(isset($_SESSION['mess2A'])==true){
            if($_SESSION['mess2A']==1){
                echo '<p> Utilisateur Supprimer :';
                    echo $_SESSION['messA'];
                    echo '</p>';
                    unset($_SESSION['mess2A']);
                    unset($_SESSION['messA']);
    
            }
        }

        echo ("Le nombre d'animaux :"." ".mysqli_num_rows($result));
    ?>

<section>
            <div class="form_box">
            <div class="form_value">
    <table border="1" style="color:white;">
        <tr>
            <td>ID</td>
            <td>Date de Naissance</td>
            <td>Nom</td>
            <td>Commentaire</td>
            <td>Sexe</td>
            <td>Espèce</td>
        </tr>

        <?php

        while($enreg=mysqli_fetch_array($result))
        {
        ?>
        <tr>
        <td>
                <?php
                    echo $enreg["id"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["date_of_birth"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["name"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["comment"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["sexe"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["id_specie"];
                ?>
            </td>
            
            <form method="post" action="searchlineani.php">
            <td>
                <?php
                echo"<a style='color: white; background-color: green; font-weight: bold; text-decoration: none; border : 2px solid green;' href='searchlineani.php?id=".$enreg['id']."''>Rechercher</a>";
                ?>
            </td>
            </form>
            <form method="post" action="deleteaniline.php">
            <td>
                <?php
                echo"<a style='color: white; background-color: red; font-weight: bold; text-decoration: none; border : 2px solid red;' href='deleteaniline.php?id=".$enreg['id']."''>Supprimer</a>";
                ?>
            </td>
            </form>
            <form method="post" action="affichageanimodify.php">
            <td>
                <?php
                echo"<a style='color: white; background-color: blue; font-weight: bold; text-decoration: none; border : 2px solid blue;' href='affichageanimodify.php?id=".$enreg['id']."''>Modifier</a>";
                ?>
            </td>
            </form>
        </tr>
        <?php
            $_SESSION['idnameA'] = ($enreg['id']." : ".$enreg['name']);
        ?>
        <?php } ?>
        <form action="">
            <div class="register">
        
                <p>Retour à la <a href="../../../indexpatron.php">Page d'acceuil</a></p>
            </div>
        </form>
        </center>
        
    </table>
    </div></div>
        </section>
    <?php 
        mysqli_close($conn);
    ?>
    
</body>
</html>