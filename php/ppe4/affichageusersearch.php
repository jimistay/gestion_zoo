<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Affichage recherche</title>
</head>
<body style="background-color : grey;">
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
<center>
    <?php
        include("../../src/logbdd.php");    
        $_SESSION['testmod'] = 1;
        $_SESSION['testmod1'] = 1;
        $_SESSION['testmod2'] = 1;

        $requete = "select * FROM staff";
        $result = mysqli_query($conn,$requete);
        if(isset($_SESSION['returnidfname'])==true){
            echo '<p id="ZOOtete"> Modification Enregistrer sur : ';
            echo $_SESSION['returnidfname'];
            echo '</p>';
            unset ($_SESSION['returnidfname']);
        }
     
        if(isset($_SESSION['mess2'])==true){
            if($_SESSION['mess2']==1){
                echo '<p> Utilisateur Supprimer :';
                    echo $_SESSION['mess'];
                    echo '</p>';
                    unset($_SESSION['mess2']);
                    unset($_SESSION['mess']);
    
            }
        }

        echo ("Le nombre d'employer :"." ".mysqli_num_rows($result));
    ?>

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
        <?php
            $_SESSION['idname'] = $enreg['id'];
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
            <form method="post" action="deleteuserline.php">
            <td>
                <?php
                echo"<a style='color: white; background-color: red; font-weight: bold; text-decoration: none; border : 2px solid red;' href='deleteuserline.php?id=".$enreg['id']."''>Supprimer</a>";
                ?>
            </td>
            </form>
            <form method="post" action="affichageusermodify.php">
            <td>
                <?php
                echo"<a style='color: white; background-color: blue; font-weight: bold; text-decoration: none; border : 2px solid blue;' href='affichageusermodify.php?id=".$enreg['id']."''>Modifier</a>";
                ?>
            </td>
            </form>
        </tr>
        <?php } ?>
        <form action="">
            <div class="register">
        
                <p>Retour à la <a href="../../indexpatron.php">Page d'acceuil</a></p>
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