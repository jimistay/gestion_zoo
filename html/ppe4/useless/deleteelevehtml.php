<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/ppe4/deleteeleve.css">
  <title>Supprimer un Elève</title>
</head>
<body>
    <section>
        <div class="form_box">
            <div class="form_value">
                <form action="../../php/ppe4/deleteeleve.php" method="post">
                    <?php
                    session_start();
                    $a = $_SESSION["log"];
                    $b = $_SESSION["pwd"];
                    echo "<center><h4 style='color: white; font-size: 18px;
                    text-shadow:
                      0 0 7px #BF6E6E,
                      0 0 10px #BF6E6E,
                      0 0 21px #BF6E6E  ,
                      0 0 42px #FA7070,
                      0 0 82px #FA7070,
                      0 0 92px #FA7070,
                      0 0 102px #FA7070,
                      0 0 151px #FA7070; text-decoration : underline; top : 3px;'> log : $a mdp : $b </h4><br></center>";
                    ?>
                    <h3>Suppression</h3>
                    <div class="inputbox">
                        <input type="text" name="num_eleve" id="num_eleve" required="required">
                        <label for="num_eleve">Identifiant Eleve</label>
                    </div>
                    <button style="background-color: rgb(228, 186, 186); border: 2px solid rgb(230, 101, 101);" onClick="this.form.submit(); this.disabled=true; this.value='Suppression…'; "><input style="border: none; background: none; cursor: pointer;" type="submit" onClick="this.form.submit(); this.disabled=true; this.value='Supression…'; " value="Supprimer l'Elève (irréversible)"></button>
                    <div class="register">
                        <p>Revenir à la page d'enregistrement <a href="registerelevehtml.php">ICI</a></p>

                        
                    </div>
                </form>
            </div>
        </div>
    
    </section>
</body>
</html>