<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexpatron.css">
    <script type="text/javascript" src="index.js"></script>
    <?php
    session_start();
    if(isset($_SESSION['log'])==false){
        header('location:disconnected.html'); 
    }
    ?>
    <?php

        if(isset($_SESSION['testmod'])==true){
            unset($_SESSION['testmod']);
        }
        if(isset($_SESSION['testmod1'])==true){
            unset($_SESSION['testmod1']);
        }
        if(isset($_SESSION['testmod2'])==true){
            unset($_SESSION['testmod2']);
        }
        if(isset($_SESSION['testmodA'])==true){
            unset($_SESSION['testmodA']);
        }
        if(isset($_SESSION['testmod1A'])==true){
            unset($_SESSION['testmod1A']);
        }
        if(isset($_SESSION['testmod2A'])==true){
            unset($_SESSION['testmod2A']);
        }
    ?>
    
        
    <title>Acceuil</title>
</head>
<body>
    <header id="HautHeader">
        <div id="logo"> 
            <img src="logo.png" id="logoZOO">
        </div>
        <div id="titreduZOO">
        <?php if(isset($_SESSION['returnidfname'])==true){
                    echo '<p id="ZOOtete"> Modification Enregistrer sur : ';
                    echo $_SESSION['returnidfname'];
                    echo '</p>';
                    unset ($_SESSION['returnidfname']);
                }
                 ?>
         <?php if(isset($_SESSION['returnidfnameA'])==true){
                    echo '<p id="ZOOtete"> Modification Enregistrer sur : ';
                    echo $_SESSION['returnidfnameA'];
                    echo '</p>';
                    unset ($_SESSION['returnidfnameA']);
                }
                 ?>
            <?php if(isset($_SESSION['mess1'])==true){
                if($_SESSION['mess1']==1){
                    echo '<p id="ZOOtete"> Utilisateur Supprimer :';
                    echo $_SESSION['mess'];
                    echo '</p>';
                    unset($_SESSION['mess1']);
                    unset($_SESSION['mess']);
                }
                } ?>

<?php if(isset($_SESSION['mess1A'])==true){
                if($_SESSION['mess1A']==1){
                    echo '<p id="ZOOtete"> Utilisateur Supprimer :';
                    echo $_SESSION['messA'];
                    echo '</p>';
                    unset($_SESSION['mess1A']);
                    unset($_SESSION['messA']);
                }
                } ?>
            <p id="ZOOtete">Bienvenue Dans le site de la gestion du ZOO </p>
        </div>
    </header>
    <div id="menu">
        <nav>
			<label for="menu-mobile" class="menu-mobile"><center><h2></h2></center></label>
			<input type="checkbox" id="menu-mobile" role="button">
			<ul>
				<li class="menu-html"><a href="#"><h4>Menu Principal</h4></a></li>
				<li class="menu-css"><a href="#"><h4>Gestion des animaux</h4></a>
					<ul class="submenu">
                        <li><a href="php/ppe4/animaux/recupidspe.php">Ajout d'un annimal</a></li>
						<li><a href="php/ppe4/animaux/recupidani.php">Modification des animaux</a></li>
						<li><a href="php/ppe4/animaux/recupidani1.php">Recherche d'un animal</a></li>
						<li><a href="php/ppe4/animaux/recupidani2.php">Supprimer un animal</a></li>
                        <li><a href="php/ppe4/animaux/affichageanisearch.php">Afficher tous les animaux</a></li>
                        <li><a href="php/ppe4/animaux/recuptof.php">Ajout espèse</a></li>
                        <li><a href="php/ppe4/animaux/recupidemployeA.php">Ajout enclos</a></li>
					</ul>
				</li>
                <?php
                if($_SESSION['fonc']=='boss'){
				echo "<li class='menu-js'><a href='#'><h4>Gestion du personnel</h4></a>
					<ul class='submenu'>
                        <li><a href='gestionpersonnel/ajouteremployehtml.php'> Ajout d'un employé</a></li>
						<li><a href='php/ppe4/recupidemploye.php'>Modification des informations d'un employé</a></li>
						<li><a href='php/ppe4/recupidemploye1.php'>Recherche d'un employé</a></li>
						<li><a href='php/ppe4/recupidemploye2.php'> Suppression d'un employe</a></li>
						<li><a href='php/ppe4/affichageusersearch.php'>Affichage des informations des employés</a></li>
                    </ul>
				</li>";
                }
                ?>
                
				<li class="menu-js"><a href="php/ppe4/logout.php"><h4>Déconnexion</h4></a></li>
				<li class="menu-js"><a href="formulaire.php"><h4>Contact</h4></a></li>
			</ul>
		</nav>
    </div>
    
    <div id="identificationDiv"><br>
    
        <p id="textidentification">Bienvenue à toi <?php echo $_SESSION['log'];?></p>
        <br><br><br>
        <div id="essai1">
            <div id="IdentificationDivPhoto">

                <p id="logoidentification">Vous pouvez gérer les animaux</p>
                <img src="humananimal.png" id="imganimalhands">
            </div>
            <div id="IdentificationDivPhotoHumans">
                <p id="logoidentification">Vous pouvez gérer le personnel</p>
                <img src="humainhumainlogo.png" id="imghumanhands">

            </div>
            
        </div>
        <div id="phrasedetropmaistqt">
            <p id="textinformation">Merci de le selectionner dans le menu quelles sont les modifcations que vous souhaitez réaliser!</p>
        </div>
    </div>
    <div id="animation">
        <img id='animationphoto' src=''/>
    </div>
    <footer>
        <p id="remerciments">Merci d'avoir pris le temps d'apporter les modifications necessaires!</p>
    </footer>
</body>
</html>

    