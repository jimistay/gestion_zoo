<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tplogin/affichage2userphp.css">
    <title>Affichage User 2</title>
</head>
<body>
    <section>
        <div class="form_box">
            <div class="form_value">
            <form action="">
            <div class="register">
                <p>Retour à la <a href="../../html/tplogin/log.html">Page de connexion</a></p>
            </div>
        </form>
        <center>
<?php
    include("../../src/logbdd.php");

    $requete="select * from user";
    $resultat= mysqli_query($conn,$requete);

    while($ligne=mysqli_fetch_assoc($resultat)){
        echo ($ligne["login"]." ; ");
        echo ($ligne["password"]." ; "."<br><br>");
    }
    mysqli_close($conn);
?>
</center>
            </div></div></section>  
    
</body>
</html>