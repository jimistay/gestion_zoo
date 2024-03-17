<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
</head>
<body>
<?php
    session_start();
    $_SESSION['recupid'];
    include("../../src/logbdd.php");
    
    $a = protect($_POST["log"]);
    $b = protect($_POST["pwd"]);

    $reqiflog = "select * from staff where login = '$a' and password='$b'";

    $resultiflog = mysqli_query($conn,$reqiflog);
    $ligneiflog = mysqli_num_rows($resultiflog);
    if($ligneiflog==1){
        $_SESSION['log']= $a;
        $_SESSION['pwd']= $b;
        $reqifboss = "select * from staff where login = '$a' and password='$b' and fonction ='boss'";
        $resultifboss = mysqli_query($conn,$reqifboss);
        $ligneifboss = mysqli_num_rows($resultifboss);
        if($ligneifboss == 1){
            $_SESSION['fonc'] = "boss";
        }else{
            $_SESSION['fonc'] = "worker";
        }
        header("location:$accP");
        
    }else{
        header("location:$logF");
    }  
    mysqli_close($conn);
?>

<!-- location:../../html/tplogin/ -->
</body>
</html>