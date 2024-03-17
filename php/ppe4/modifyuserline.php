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
    $num = protect($_POST['id']);
    $a = protect($_POST['fname']);
    $b = protect($_POST['lname']);
    $c = protect($_POST['dob']);
    $d = protect($_POST['sal']);
    $e = protect($_POST['log']);
    $f = protect($_POST['pwd']);
    $g = protect($_POST['sexe']);
    $h = protect($_POST['fonction']);
    $req = "update staff set first_name='$a', last_name='$b', date_of_birth='$c', salarie='$d', login='$e', password='$f', sexe='$g', fonction='$h' where id = '$num'";
    mysqli_query($conn,$req);

    $_SESSION['returnidfname'] = ($num." : ".$a);

    if($_SESSION['testmod']==0){
        header('location:../../indexpatron.php');
    }else if($_SESSION['testmod']==1){
        header('location:affichageusersearch.php');
    }
    
    mysqli_close($conn);
    ?>
    
</body>
</html>