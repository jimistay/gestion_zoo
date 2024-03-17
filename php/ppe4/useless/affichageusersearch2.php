<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Affichage spécial recherche</title>
</head>
<body>
<center>
    <?php
        include("../../src/logbdd.php");    
        session_start();
        $_SESSION['testmod1'] = 1;

        $requete = "select * FROM staff";
        $result = mysqli_query($conn,$requete);
        echo ("Le nombre d'employer :"." ".mysqli_num_rows($result));
    ?>
</center>
<section>
            <div class="form_box">
            <div class="form_value">
    <table border="1" style="color:white;">
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Date de naissance</td>
            <td>Salaire</td>
            <td>login</td>
            <td>password</td>
            <td>Sexe</td>
            <td>Fonction</td>
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
                    echo $enreg["first_name"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["last_name"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["date_of_birth"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["salarie"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["login"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["password"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["sexe"];
                ?>
            </td>
            <td>
                <?php
                    echo $enreg["fonction"];
                ?>
            </td>
            <form method="post" action="searchlineuser.php">
            <td>
                <?php
                echo"<a style='color: white; background-color: green; font-weight: bold; text-decoration: none; border : 2px solid green;' href='searchlineuser.php?id=".$enreg['id']."''>Rechercher</a>";
                ?>
            </td>
            </form>
        

        <?php } ?>
        <form action="">
            <div class="register">
        
                <p>Retour à la <a href="../../indexpatron.php">Page d'acceuil</a></p>
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