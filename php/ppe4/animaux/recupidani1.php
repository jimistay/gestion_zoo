<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>récuperation des id des animaux et mise en place dans un select utilisable</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['log'])==false){
        header('location:../../../disconnected.html');
    }
    ?>
    <?php

    include("../../../src/logbdd.php");  
    $requete = "select id,name from animal order by name asc";
    $resultat=mysqli_query($conn,$requete);
    $idem = '<label for="Pseudo">Animal : </label>
    <select id="type" name="id"> ';
    while($enreg=mysqli_fetch_array($resultat)){
        $a = $enreg['id'];
        $idem .= "<option value='";
        $idem .= $a;
        $idem .= "'>";
        $idem .= ($a." : ".$enreg['name']);
        $idem .= '</option>';
    }
    $idem .=  '</select>';


    $_SESSION['idem2A']= $idem;
    header('location:../../../gestoionanimaux/rechercheani.php');



    mysqli_close($conn);
    ?>
</body>
</html>