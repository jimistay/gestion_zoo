<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer la ligne</title>
</head>
<body>
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
    <?php
    include("../../src/logbdd.php");
    $num;
    if($_SESSION['testmod2'] == 1){
        $num = protect($_GET['id']);
    }else if($_SESSION['testmod2'] == 0){
        $num = protect($_POST['id']);
    }
    $_SESSION['mess'] = $num;
    $req = "delete from staff where id = '$num'";
    mysqli_query($conn,$req);
            if($_SESSION['testmod2'] == 1){
                $_SESSION['mess2'] = 1;
                header("location:affichageusersearch.php");
            }else if($_SESSION['testmod2'] == 0){
                $_SESSION['mess1'] = 1;
                header("location:../../indexpatron.php");
            }
    mysqli_close($conn);
    ?>
    
</body>
</html>