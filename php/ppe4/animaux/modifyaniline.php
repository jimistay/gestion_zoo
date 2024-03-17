<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modfifier la ligne</title>
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
    $num = protect($_POST['id']);
    $a = protect($_POST['dob']);
    $b = protect($_POST['name']);
    $c = protect($_POST['com']);
    $d = protect($_POST['sexe']);
    $e = protect($_POST['spe']);
    $req = "update animal set date_of_birth='$a', name='$b', comment='$c', sexe='$d', id_specie='$e' where id = '$num'";
    mysqli_query($conn,$req);

    $_SESSION['returnidfnameA'] = ($num." : ".$b);

    if($_SESSION['testmodA']==0){
        header('location:../../../indexpatron.php');
    }else if($_SESSION['testmodA']==1){
        header('location:affichageanisearch.php');
    }
    
    mysqli_close($conn);
    ?>
    
</body>
</html>