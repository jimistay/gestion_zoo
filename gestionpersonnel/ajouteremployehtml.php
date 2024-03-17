<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajouteremploye.css">
    <script type="text/javascript" src="../indexE.js"></script>
    <title>Ajouter</title>
</head>
<body>
<?php
    session_start();
    if($_SESSION['fonc']!='boss'){
        $_SESSION['deco']=0;
        header("location:../php/ppe4/logout.php"); 
    }
    ?>
    <?php
    if(isset($_SESSION['log'])==false){
        header('location:../disconnected.html'); 
    }
    ?>
    <header id="HautHeader">
        <div id="logo"> 
            <img src="../logo.png" id="logoZOO">
        </div>
        <div id="titreduZOO">
            <p id="ZOOtete">Bienvenue dans notre  ZOO </p>
        </div>
    </header>
    <div id="menu">
        <nav>
			<label for="menu-mobile" class="menu-mobile"><h2></h2></label>
			<input type="checkbox" id="menu-mobile" role="button">
			<ul>
				<li class="menu-html"><a href="../indexpatron.php"><h4>Menu Principal</h4></a></li>
				<li class="menu-css"><a href="#"><h4>Gestion des animaux</h4></a>
                <ul class="submenu">
                        <li><a href="../php/ppe4/animaux/recupidspe.php">Ajout d'un annimal</a></li>
						<li><a href="../php/ppe4/animaux/recupidani.php">Modification des animaux</a></li>
						<li><a href="../php/ppe4/animaux/recupidani1.php">Recherche d'un animal</a></li>
						<li><a href="../php/ppe4/animaux/recupidani2.php">Supprimer un animal</a></li>
                        <li><a href="../php/ppe4/animaux/affichageanisearch.php">Afficher tous les animaux</a></li>
                        <li><a href="../php/ppe4/animaux/recuptof.php">Ajout espèse</a></li>
                        <li><a href="../php/ppe4/animaux/recupidemployeA.php">Ajout enclos</a></li>
					</ul>
				</li>
				<li class='menu-js'><a href='#'><h4>Gestion du personnel</h4></a>
					<ul class='submenu'>
                        <li><a href='#'> Ajout d'un employé</a></li>
						<li><a href='../php/ppe4/recupidemploye.php'>Modification des informations d'un employé</a></li>
						<li><a href='../php/ppe4/recupidemploye1.php'>Recherche d'un employé</a></li>
						<li><a href='../php/ppe4/recupidemploye2.php'> Suppression d'un employe</a></li>
						<li><a href='../php/ppe4/affichageusersearch.php'>Affichage des informations des employés</a></li>
                    </ul>
				</li>
				<li class="menu-js"><a href="../php/ppe4/logout.php"><h4>Déconnexion</h4></a></li>
				<li class="menu-js"><a href="../formulaire.php"><h4>Contact</h4></a></li>
			</ul>
		</nav>
    </div>
    <div id="identificationDiv"><br>
        
        <p id="textidentification">Session : <?php echo $_SESSION['log'];?></p><br><br>
        <h2>Gestion du personnel</h2> <br>
        <center>
        <p id="textremplir">Ajouter un employé:</p><br>
        <p id="textremplir">Pour ajouter un employé veuillez remplir ce formulaire avec les informations de la personne</p> <br>
    <form action="../php/ppe4/registeruser.php" method="post">
    <div id="nom">
        <label for="nom">Nom:</label>
        <input type="text" id="prenomdeanimal" name="fname" placeholder="" />
    </div>
    <div id="nom">
        <label for="prenom">Prenom:</label>
        <input type="text" id="prenomdeanimal" name="lname" placeholder="" />
    </div>
    <div id="nom">
        <label for="prenom">Login:</label>
        <input type="text" id="prenomdeanimal" name="log" placeholder="" />
    </div>
    <div id="nom">
        <label for="password">Mot de passe:</label>
        <input type="password" id="prenomdeanimal" name="pwd" placeholder="" />
    </div>
    <div>
        <label for="date">Date de naissance </label>
        <input type="date" id="datedenaissance" name="dob" placeholder="" />
    </div>
    <div>
        <label for="sexe">Sexe </label>
        <select id="type" name="sexe">
            <option value="male">Homme</option>
            <option value="female">Femme</option>
            <option value="other">Autre</option>
        </select>
    </div>
    <div>
        <label for="salarie">Salaire</label>
        <input type="number" id="racedeanimal" name="sal" placeholder="" />
    </div>
    <div>
        <label for="fonction">Fonction </label>
        <select id="type" name="fonction">
            <option value="boss">Directeur</option>
            <option value="worker">Employé</option>
        </select>
    </div>

    <div>
    <input style="cursor: pointer;" id="ajoutbouton" type="submit" value="Ajouter l'employer">
       

    </div>
    <input type="reset" id="ajoutbouton" value="Réinitialisé"></input>
    </form>
    <p>Retour à la <a href="../indexpatron.php">Page d'acceuil</a></p>
</center>
    <div id="animation">
        <img id='animationphoto' src=''/>
    </div>
    <footer>
        <br>
        <p id="remerciments">Merci d'avoir pris le temps d'apporter les modifications necessaires!</p>
    </footer>
</body>
</html>