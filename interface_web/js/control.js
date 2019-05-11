"use script";

/* Validation du nom */
function nomValide() {
	var nom = document.getElementById("input_nom");
	if (nom.value === "") {
        document.querySelector("#nom .erreur").style.color="red";
		document.querySelector("#nom .erreur").textContent = "Vous devez indiquer votre nom.";
		nom.classList.add("invalide");
		return false;
	}
	return true;
}

/* Validation du prenom */
function prenomValide() {
	var pnom = document.getElementById("input_prenom");
	if (pnom.value === "") {
        document.querySelector("#prenom .erreur").style.color="red";
		document.querySelector("#prenom .erreur").textContent = "Vous devez indiquer votre prenom.";
		pnom.classList.add("invalide");
		return false;
	}
	return true;
}

/* Validation de l'email */
function emailValide() {
    let mail = document.getElementById("input_mail");
    let mailRegex = "#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#";
	if (mail.value === "") {
        document.querySelector("#mail .erreur").style.color="red";
		document.querySelector("#mail .erreur").textContent = "Vous devez indiquer votre adresse mail.";
		mail.classList.add("invalide");
		return false;
    }
   
    /*if (!mailRegex.test(mail.value)){
        document.querySelector("#mail .erreur").style.color="red";
		document.querySelector("#mail .erreur").textContent = "Cette adresse mail n'est pas correcte.";
		mail.classList.add("invalide");
		return false;
    }*/
      //	$this->errors["mail"] = "Adresse mail invalide";
    return true;
}

/* Validation du message */
function messageValide() {
	var msge = document.getElementById("text_message");
	if (msge.value === "") {
        document.querySelector("#message .erreur").style.color="red";
		document.querySelector("#message .erreur").textContent = "Vous devez nous adresser un message.";
		msge.classList.add("invalide");
		return false;
	}
	return true;
}

/* Listener de validation */
document.getElementById("formulaire").addEventListener("submit", function (e) {
	var i;
	/* Remise à zéro des champs invalides */
	var inv = this.getElementsByClassName("invalide");
	for (i = inv.length - 1; i >= 0; i--) {
		inv[i].classList.remove("invalide");
	}

	/* Vidage des erreurs */
	var err = this.getElementsByClassName("erreur");
	for (i = 0; i < err.length; i++) {
		err[i].textContent = "";
	}

	/* Validation : par défaut, le formulaire est valide,
	 * et on effectue les validations une par une (on veut
	 * qu'elles soient toutes exécutées, même si le premier
	 * champ est déjà invalide) */
	var valide = true;
	valide = nomValide() && valide;
	valide = prenomValide() && valide;
    valide = emailValide() && valide;
    valide =messageValide()  && valide;

	/* Y a-t-il eu des erreurs ? */
	if (!valide) {
		e.preventDefault();
	}
});

