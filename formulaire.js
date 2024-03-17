function validateForm() {
    var nom = document.forms["myForm"]["nom"].value;
    var prenom = document.forms["myForm"]["prenom"].value;
    var date_naissance = document.forms["myForm"]["date_naissance"].value;
    var ville = document.forms["myForm"]["ville"].value;
    var login = document.forms["myForm"]["login"].value;
    var mot_de_passe = document.forms["myForm"]["mot_de_passe"].value;
    var commentaire = document.forms["myForm"]["commentaire"].value;
  
// Vérification si les champs obligatoires sont remplis
if (nom == "" || prenom == "" || date_naissance == "" || ville == "" || login == "" || mot_de_passe == "" || commentaire == "") {
    alert("Veuillez remplir tous les champs obligatoires");
    return false;
}
    
// Vérification si le login et le mot de passe ne contiennent pas de caractères spéciaux
var regex = /^[a-zA-Z0-9]*$/;
if (!regex.test(login)) {
    alert("Le champ login ne doit contenir que des lettres et des chiffres.");
    return false;
}
if (!regex.test(mot_de_passe)) {
    alert("Le champ mot de passe ne doit contenir que des lettres et des chiffres.");
    return false;
}
}

function togglePassword() {
    var passwordField = document.getElementById("mot_de_passe");
    var toggleBtn = document.getElementById("toggleBtn");
    
if (passwordField.type === "password") {
    passwordField.type = "text";
    toggleBtn.textContent = "Cacher";
} else {
    passwordField.type = "password";
    toggleBtn.textContent = "Afficher";
}
}