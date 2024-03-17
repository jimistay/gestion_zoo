<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tplogin/affichage1userphp.css">
    <title>Affichage User 1</title>
</head>
<body><center>
    <?php
        include("../../src/logbdd.php");    


        $requete = "select * FROM user";
        $result = mysqli_query($conn,$requete);

        echo ("Le nombre d'utiilisateur :"." ".mysqli_num_rows($result));
    ?>
    </center>
<section>
            <div class="form_box">
            <div class="form_value">
    <table border=1>
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
        </tr>
        
            </div>
            </div>
      

        <?php } ?>
        <form action="">
            <div class="register">
                <p>Retour à la <a href="../../html/tplogin/log.html">Page de connexion</a></p>
            </div>
        </form>
        </div></div>
    </table>
    </section>  
    <?php 
        mysqli_close($conn);
    ?>
</body>
</html>