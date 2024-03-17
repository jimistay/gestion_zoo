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
    include("../../src/logbdd.php");
    $num = $_GET['num_eleve'];
    $num = protect($num);
    $req = "delete from eleve where num_eleve = '$num'";
    mysqli_query($conn,$req);

    header('location:affichageelevespecial.php');
    mysqli_close($conn);
    ?>
    
</body>
</html>