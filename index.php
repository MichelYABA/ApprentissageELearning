<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Projet Big Data</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body text="#F0F0F0">

    <div class="container">

        <header class="masthead">
            <div class="row">
                <div class="col-lg-4">
                   
                       
                            <a href="index.php">
                        <!--img src="http://via.placeholder.com/350x150"-->
                            <img src="images/Machine-Learning.jpg" class="logo">
                    </a>
                       
                    
                </div>
                <div class="col-lg-6 text-center">
                    <h3 class="text-muted">APPRENTISSAGE NON SUPERVISE SUR BIG-DATA ET CLOUD COMPUTING</h3>
                </div>
                <div class="col-lg-2">
                    <button type="button" class="btn btn-secondary">
                        <span class="admin">Admin</span>
                    </button>
                </div>
            </div>
           
            <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav text-md-center nav-justified w-100">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pages/documentation.php">Documentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pages/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">...</li>
            </ol>
        </nav>
        <main role="main">

            <div class="row">
                <div class="col-lg-4">
                    <h3 class="text-center">Description</h3>
                    <div class="card">
                        <div class="card-body">
                            <p  ><i id="description">Votre description ici</i> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h3>Catégorie d'Algorithmes</h3>
                    <form  id="formulaire" action="Pages/treatment.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group" id="algo">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input id="regression" class="form-check-input" type="radio" name="typeAlgorithme" value="regression"> Régression
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input id="classification" class="form-check-input" type="radio" name="typeAlgorithme" value="classification"> Classification
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input id="clustering" class="form-check-input" type="radio" name="typeAlgorithme" value="clustering"> Clustering
                                </label>
                            </div>
                            <span class="erreur"></span>
                        </div>
                        <fieldset>
                            <legend>Document (CSV, TXT, EXCEL)</legend>
                            <div class="form-group text-center">
                               
								<br/>
                                <div class="form-group" id="up_fich">
                                    <label for="form-control-file">Déposer votre fichier ici</label>
									<br/><br/>
                        <input type="file" name="fichier" id="fichier" class="form-control-file"  />
                                    <!--span id="fichier$"></span-->
                                    <span class="erreur"></span>
                                    <?php
                                        /*if (isset($_FILES)){
                                            exec('file -i '.$_FILES[$name]['tmp_name'],$out);
                                            print_r($out);
                                        }*/
                                       
                                    ?>
                                </div>
								
                            </div>
                        </fieldset>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary float-right" id="submit" name="submit">Envoyer en traitement</button>
                        </div>
                    </form>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Utilisateur Avancé ?
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="Pages/intermediaryUser.php">Profil Intermediaire</a>
                            <a class="dropdown-item" href="Pages/expertUser.php">Profil Expert</a>
                        </div>
                        
                    </div>
                 
                </div>
            </div>

        </main>
         <hr/>
        <!-- Site footer -->
        <footer class="footer">

            <nav >
            <ul >
                        <li class="regression" >
                            <a  href="#">
                               Regression
                            </a>
                           
                        </li>
                        <li class="classification">
                            <a  href="#">Classification supervisée</a>
                        </li>
                        <li class="clustering">
                            <a href="#">Clustering</a>
                        </li>
                        
                        
                    </ul>
                     <!--small>&copy; Projet Big Data 2017</small-->
            <!--small>&copy; Projet Big Data 2017</small-->
        </nav>
            <small>&copy; Projet Big Data 2017</small>
           
        </footer>

    </div>
    <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script-->

    <script src="assets/js/vendor/popper.min.js"></script>
	<script src="assets/js/vendor/jquery-slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        let descr=document.getElementById("description");
        
        let regr=document.getElementById("regression");
        console.log(regr);
        let clas=document.getElementById("classification");
        console.log(clas);
        let clus=document.getElementById("clustering");
        console.log(clus);

        regr.addEventListener("click", descriptionRegression);

        function descriptionRegression(event){
            //console.log(descr);
            descr.textContent="Les algorithmes de régression linéaire modélisent la relation entre des variables prédictives et une variable cible.";
        }

         clas.addEventListener("click", descriptionClassification);

            function descriptionClassification(event){
                //console.log(descr);
    descr.textContent="La classification non supervis´ee d´esigne un corpus de m´ethodes ayant pour objectif de dresser";
    descr.textContent+=" ou de retrouver une typologie existante caract´erisant un ensemble de n observations, `a partir";
    descr.textContent+=" de p caract´eristiques mesur´ees sur chacune des observations.";
            }

         clus.addEventListener("click", descriptionClustering);

        function descriptionClustering(event){
                //console.log(descr);
                descr.textContent="Les algorithmes de clustering permettent de partitionner les données en sous-groupes, ou clusters, demanière non supervisée";
         }

function checkExtention(verifExt,idChamp) {
    let erreur=document.querySelector("#up_fich .erreur");
    let myString=document.getElementById(idChamp).value;
    let myExt=myString.substring(myString.lastIndexOf(".")+1, myString.length);
    myExt=myExt.toLowerCase();
    for (i=0;i<verifExt.length; i++) {
        if (myExt===verifExt[i])
            return true;
    }
    erreur.style.color = 'red';
    if (myString===""){
        erreur.textContent="Aucun fichier n'a été choisi";
        return false;
    }
   
    erreur.textContent="Ce type de fichier n'est pas accepté, \n Veuillez choisir un fichier de type texte (.txt) ou excel(.csv/.xlsx) ";
    //alert ("votre fichier n'est pas au bon format");
    return false;
}

        /* Validation des algorithmes */
function catAlgorithme() {
    let erreur=document.querySelector("#algo .erreur");
	
	/* le panneau est affiché : on compte les cases cochées */
	let algorithmes = document.querySelectorAll("#algo input[type=radio]:checked");
	if (algorithmes.length === 0) {
        erreur.style.color = 'red';
        //document.querySelector("#algo .erreur").textContent = "Vous devez sélectionner un algorithme";
        erreur.textContent="Vous devez choisir un algorithme";
		return false;
	}
	return true;
}

/* Listener de validation */
document.getElementById("formulaire").addEventListener("submit", function (e) {
	let i;
	/* Remise à zéro des champs invalides */
	/*let inv = this.getElementsByClassName("invalide");
	for (i = inv.length - 1; i >= 0; i--) {
		inv[i].classList.remove("invalide");
	}*/

	/* Vidage des erreurs */
	let err = document.getElementsByClassName("erreur");
	for (i = 0; i < err.length; i++) {
		err[i].textContent = "";
    }
   let ext=['txt','csv', 'xlsx'];
   let r=checkExtention(ext,'fichier');

	/* Validation : par défaut, le formulaire est valide,
	 * et on effectue les validations une par une (on veut
	 * qu'elles soient toutes exécutées, même si le premier
	 * champ est déjà invalide) */
	let valide = true;
	//valide = nomValide() && valide;
	valide = r && valide;
	valide =catAlgorithme() && valide;

	/* Y a-t-il eu des erreurs ? */
	if (!valide) {
		e.preventDefault();
	}//else{
       // alert("c'est bon !!!");
    //}
});

    </script>
</body>

</html>