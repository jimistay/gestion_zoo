<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/ppe4/registereleve.css">
  <title>Ajouter un élève</title>
</head>
<body>
    <section>
        <div class="form_box">
            <div class="form_value">
                <form action="../../php/ppe4/registereleve.php" method="post">
                <?php
                    session_start();
                    $a = $_SESSION["log"];
                    $b = $_SESSION["pwd"];
                    echo "<center><h4 style='color: white; font-size: 30px;
                    text-shadow:
                      0 0 7px #BF6E6E,
                      0 0 10px #BF6E6E,
                      0 0 21px #BF6E6E  ,
                      0 0 42px #FA7070,
                      0 0 82px #FA7070,
                      0 0 92px #FA7070,
                      0 0 102px #FA7070,
                      0 0 151px #FA7070; text-decoration : underline;'>Bienvenue log : $a mdp : $b </h4><br></center>";
                    ?>
                    <h3>Ajouter un élève</h3>
                    <div class="inputbox">
                        <input type="text" name="num_eleve" id="num_eleve" readonly placeholder="Automatique">
                        <label for="login">Identifiant Elève</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="name_eleve" id="name_eleve" required="required">
                        <label for="login">Nom Elève</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="numtel_eleve" id="numtel_eleve" required="required">
                        <label for="login">Téléphone</label>
                    </div>  
                    <div class="inputbox">
                        <input type="text" name="adresse_eleve" id="adresse_eleve" required="required">
                        <label for="text">Adresse élève</label>
                    </div>
                    <?php
                    if($_SESSION['fonc']=='boss'){
                        echo '<div class="inputbox">
                        <input type="text" name="adresse_eleve" id="adresse_eleve" required="required">
                        <label for="text">test boss</label>
                    </div>';
                    
                    }
                    ?>
                    <button onClick="this.form.submit(); this.disabled=true; this.value='Création…'; "><input style="border: none; background: none; cursor: pointer;" type="submit" onClick="this.form.submit(); this.disabled=true; this.value='Création…'; " value="Enregistrer l'élève"></button>
                    <div class="register">
                        <p>Déconnexion <a href="../../php/ppe4/logout.php">ICI</a></p>
                    </div>
                </form>
                
            </div>
    
        </div>
        <div class="execptlog">
                      

            <button style="background-color: rgb(228, 186, 186); border: 2px solid rgb(230, 101, 101);" onclick="window.location.href = 'deleteelevehtml.php' ;">
        
                Supprimer un eleve</button>
            
            <button onclick="window.location.href = 'searchelevehtml.php' ;">
        
                Recherche</button>
            
            <button onclick="window.location.href = 'searcheleveadvhtml.php' ;">
        
                Info Elève in Input</button>
        
            <button onclick="window.location.href = '../../php/ppe4/affichageeleve1.php' ;">
        
                Affichage 1</button>
        
            <button onclick="window.location.href = '../../php/ppe4/affichageeleve2.php' ;">
        
                Affichage 2</button>
        
            <button onclick="window.location.href = '../../php/ppe4/affichageeleve3.php' ;">
        
                Affichage 3</button>

            <button onclick="window.location.href = '../../php/ppe4/affichageelevespecial.php' ;">
        
                Affichage Special</button>

            <button onclick="window.location.href = '../../php/ppe4/affichageelevesearch.php' ;">
        
                Affichage Recherche</button>
        
        
        
                        </div>
    </section>
</body>
</html>
