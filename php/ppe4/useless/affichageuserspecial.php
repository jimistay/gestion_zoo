<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tplogin/affichageuserspecial.css">
    <title>Affichage spécial</title>
</head>
<body>
<center>
    <?php
        include("../../src/logbdd.php");    


        $requete = "select * FROM user";
        $result = mysqli_query($conn,$requete);
        echo ("Le nombre d'utilisateur :"." ".mysqli_num_rows($result));
    ?>
</center>
<section>
            <div class="form_box">
            <div class="form_value">
    <table border="1" style="color:white;">
        <tr>
            <td>login</td>
            <td>password</td>
        </tr>

        <?php

        while($enreg=mysqli_fetch_array($result))
        {
        ?>
        <tr>
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
            <form method="post" action="deleteuserline.php">
            <td>
                <?php
                echo"<a style='color: white; background-color: red; font-weight: bold; text-decoration: none; border : 2px solid red;' href='deleteuserline.php?login=".$enreg['login']."''>Supprimer</a>";
                ?>
            </td>
            </form>
        </tr>
        

        <?php } ?>
        <form action="">
            <div class="register">

                <p>Retour à la <a href="../../html/tplogin/log.html">Page de connexion</a></p>
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