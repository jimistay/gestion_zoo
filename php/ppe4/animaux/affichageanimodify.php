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

            if($_SESSION['testmodA'] == 1){
                echo "<p>Retour à la <a href='affichageanisearch.php'>Page de recherche</a></p>";
            }else if($_SESSION['testmodA'] == 0){
                echo "<p>Retour à la <a href='../../../indexpatron.php'>Page d'acceuil</a></p>";
            }
            ?>
            </div>
        </form>

    <?php
    include("../../../src/logbdd.php");

    $a;
    if($_SESSION['testmodA'] == 1){
        $a = protect($_GET['id']);
    }else if($_SESSION['testmodA'] == 0){
        $a = protect($_POST['id']);
    }
    $requete = "select * from animal where id='$a'";
    $resultat=mysqli_query($conn,$requete);
                echo "<h1>Voici les information concernant l'animal : $a, Vous pouvez les modifier ici</h1>";
                $enreg=mysqli_fetch_array($resultat);

                echo '<form action="modifyaniline.php" method="post">';
                echo '<table><tr><td>ID (non-modifiable) </td><td>Date de Naissance</td><td>Nom</td><td>Commentaire</td><td>Sexe</td><td>Espèce</td></tr>';
                echo '<tr>';
                echo '<td><input class="inputbox" name="id" type="text" value="'.$enreg["id"].'" readonly></td>';
                echo '<td><input class="inputbox" name="dob" type="text" value="'.$enreg["date_of_birth"].'"></td>';
                echo '<td><input class="inputbox" name="name" type="text" value="'.$enreg["name"].'"></td>';
                echo '<td><input class="inputbox" name="com" type="text" value="'.$enreg["comment"].'"></td>';
                if($enreg['sexe']=='male'){
                    echo '<td>
                <select id="type" name="sexe" value="'.$enreg['sexe'].'">
                    <option value="male">Male</option>
                    <option value="female">Femelle</option>
                    <option value="other">Autre</option>
                </select></td>';
                }else if($enreg['sexe']=='female'){
                    echo '<td>
                <select id="type" name="sexe" value="'.$enreg['sexe'].'">
                    <option value="female">Femelle</option>
                    <option value="male">Male</option>
                    <option value="other">Autre</option>
                </select></td>';
                }else if($enreg['sexe']=='other'){
                    echo '<td>
                <select id="type" name="sexe" value="'.$enreg['sexe'].'">
                    <option value="other">Autre</option>
                    <option value="male">Male</option>
                    <option value="female">Femelle</option>
                    </select></td>';
                }
                echo '<td>';
                echo $_SESSION['idemespA'];
                echo '</td>';
                         
        
                echo"<td><input style='color: white; background-color: blue; font-weight: bold; text-decoration: none; border : 2px solid blue;' type='submit' value='Sauvegarer les modifications'></td>";
               

                echo '</tr></table>';
                echo '</form>';
    mysqli_close($conn);
    ?>
    </center>
            </div></div></section>  
</body>
</html>