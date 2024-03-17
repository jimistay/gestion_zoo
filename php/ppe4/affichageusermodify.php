<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Recherche avancé user</title>
</head>
<body style="background-color: grey;">
<center>
<section>
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
<div class="form_box">
            <div class="form_value">
            <form action="">
            <div class="register">
            <?php
            if($_SESSION['testmod'] == 1){
                echo "<p>Retour à la <a href='affichageusersearch.php'>Page de recherche</a></p>";
            }else if($_SESSION['testmod'] == 0){
                echo "<p>Retour à la <a href='../../indexpatron.php'>Page d'acceuil</a></p>";
            }
            ?>
            </div>
        </form>

    <?php
    include("../../src/logbdd.php"); 

    $a;
    if($_SESSION['testmod'] == 1){
        $a = protect($_GET['id']);
    }else if($_SESSION['testmod'] == 0){
        $a = protect($_POST['id']);
    }
    $requete = "select * from staff where id='$a'";
    $resultat=mysqli_query($conn,$requete);
                echo "<h1>Voici les information concernant l'utilisateur login $a, Vous pouvez les modifier ici</h1>";
                $enreg=mysqli_fetch_array($resultat);

                echo '<form action="modifyuserline.php" method="post">';
                echo '<table><tr><td>ID (non-modifiable) </td><td>Nom</td><td>Prénom</td><td>Date de Naissance</td><td>Salaire</td><td>Login</td><td>Mot de Passe</td><td>Sexe</td><td>Fonction</td></tr>';
                echo '<tr>';
                echo '<td><input class="inputbox" name="id" type="text" value="'.$enreg["id"].'" readonly></td>';
                echo '<td><input class="inputbox" name="fname" type="text" value="'.$enreg["first_name"].'"></td>';
                echo '<td><input class="inputbox" name="lname" type="text" value="'.$enreg["last_name"].'"></td>';
                echo '<td><input class="inputbox" name="dob" type="date" value="'.$enreg["date_of_birth"].'"></td>';
                echo '<td><input class="inputbox" name="sal" type="text" value="'.$enreg["salarie"].'"></td>';
                echo '<td><input class="inputbox" name="log" type="text" value="'.$enreg["login"].'"required></td>';
                echo '<td><input class="inputbox" name="pwd" type="text" value="'.$enreg["password"].'"required></td>';
                if($enreg['sexe']=='male'){
                    echo '<td>
                <select id="type" name="sexe" value="'.$enreg['sexe'].'">
                    <option value="male">Homme</option>
                    <option value="female">Femme</option>
                    <option value="other">Autre</option>
                </select></td>';
                }else if($enreg['sexe']=='female'){
                    echo '<td>
                <select id="type" name="sexe" value="'.$enreg['sexe'].'">
                    <option value="female">Femme</option>
                    <option value="male">Homme</option>
                    <option value="other">Autre</option>
                </select></td>';
                }else if($enreg['sexe']=='other'){
                    echo '<td>
                <select id="type" name="sexe" value="'.$enreg['sexe'].'">
                    <option value="other">Autre</option>
                    <option value="male">Homme</option>
                    <option value="female">Femme</option>
                    </select></td>';
                }
                if($enreg['fonction']=='boss'){
                    echo '<td>
                <select id="type" name="fonction" value="'.$enreg['fonction'].'">
                    <option value="boss">Directeur</option>
                    <option value="worker">Employé</option>
                </select></td>';
                }else if($enreg['fonction']=='worker'){
                    echo '<td>
                <select id="type" name="fonction" value="'.$enreg['fonction'].'">
                    <option value="worker">Employé</option>
                    <option value="boss">Directeur</option>
                </select></td>';
                }
                echo"<td><input style='color: white; background-color: blue; font-weight: bold; text-decoration: none; border : 2px solid blue;' type='submit' value='Sauvegarer les modifications'></td>";
               

                echo '</tr></table>';
                echo '</form>';
    mysqli_close($conn);
    ?>
    </center>
            </div></div></section>  
</body>
</html>