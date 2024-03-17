<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>récuperation des id employer et mise en place dans un select utilisable</title>
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
    $requete = "select type from type_of_food order by type asc";
    $resultat=mysqli_query($conn,$requete);
    $idem = '<label for="nom">Type de Nourriture</label>
    <select id="type" name="tof"> ';
    while($enreg=mysqli_fetch_array($resultat)){
        $a = $enreg['type'];
        $idem .= "<option value='";
        $idem .= $a;
        $idem .= "'>";
        $idem .= $a;
        $idem .= '</option>';
    }
    $idem .=  '</select>';


    $_SESSION['idemA']= $idem;
    header('location:../../../gestoionanimaux/ajouterspehtml.php');



    mysqli_close($conn);
    ?>
</body>
</html>