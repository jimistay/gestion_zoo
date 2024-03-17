<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
    <script type="text/javascript" src="formulaire.js"></script>
    <title>Document</title>
</head>
<body>
<form>
<form name="myForm" onsubmit="return validateForm()">
    <main>
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div>
            <label for="date_naissance">Date de naissance:</label>
            <input type="date" id="date_naissance" name="date_naissance" required>
        </div>
        <div>
            <label for="ville">Ville:</label>
            <input type="text" id="ville" name="ville" required>
        </div>
        <div>
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required>
        </div>
        <div>
            <label for="mot_de_passe">Mot de passe:</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" minlength="8" required>
            <button type="button" id="toggleBtn" onclick="togglePassword()">Afficher</button> <br>
        </div><br>
        <div>
            <label for="commentaire">Commentaire:</label>
            <textarea id="commentaire" name="commentaire" required></textarea>
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </main>
</form>
</body>
</html>