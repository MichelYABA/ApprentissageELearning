<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Documentation</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/main.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <header class="masthead">
            <div class="row">
                <div class="col-lg-4">
                    <a href="../index.php">
                        <img src="../images/Machine-Learning.jpg" class="logo">
                    </a>
                </div>
                <div class="col-lg-6 text-center">
                    <h3 class="text-muted">APPRENTISSAGE NON SUPERVISE SUR BIG-DATA ET CLOUD COMPUTING</h3>
                </div>
                <div class="col-lg-2">
                    <button type="button" class="btn btn-secondary">
                        Admin
                    </button>
                </div>
            </div>
            <br>
            <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav text-md-center nav-justified w-100">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php">Accueil
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
                            <a class="nav-link" href="documentation.php">Documentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.php">Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Documentation</li>
            </ol>
        </nav>
        <main role="main">

            <div class="row">
            <div class="col-lg-3">
                    <!--h6 class="text-center">Liste des algorithmes</h6-->
                    <div>
                        <!--div class="card-body"-->
                             <ul class="navbar-nav text-md-center nav-justified w-100">
                                <li class="nav-item active" style="list-style-type:none; text-align:center; border-bottom:1px solid #e9ecef;" id="regr"><b>Regression</b></li>
                                <li class="nav-item" style="list-style-type:none; text-align:center; border-bottom:1px solid #e9ecef;" id="clas"><b>Classification</b></li>
                                <li class="nav-item" style="list-style-type:none; text-align:center; border-bottom:1px solid #e9ecef;"  id="clus"><b>Clustering</b></li>
                                 <li  class="nav-item" style="list-style-type:none; text-align:center; border-bottom:1px solid #e9ecef;"  id="knn"><b>K-NN</b></li>
                                  <li class="nav-item" style="list-style-type:none; text-align:center; border-bottom:1px solid #e9ecef;"  id="naive"><b>K-Moyenne</b></li>
                            </ul>
                        <!--/div-->
                    </div>
                </div>
                <div class="col-lg-9">
                    <div id="doc">
                        
                    </div>
                </div>

        </main>

        
         <hr/>
        <!-- Site footer -->
        <footer class="footer" >
           <nav >
            <ul style="background-color:#e9ecef; border-radius:25rem;" >
                        <li class="regression" >
                            <a  href="#">
                               Regression
                            </a>
                           
                        </li>
                        <li class="classification">
                            <a  href="#">Classification</a>
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>

        <script src="../assets/js/vendor/popper.min.js"></script>
		 <script src="../assets/js/vendor/jquery-slim.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script defer src="../js/control.js"></script>

        <script>

            /* $(function() {
                 $('#regr').click(function() {
                     $('#doc').load('contenu.html');
                 });
             });*/

            
             let docu=document.getElementById("doc");
        
            let regr=document.getElementById("regr");
            let clas=document.getElementById("clas");
            let clus=document.getElementById("clus");
            let knn=document.getElementById("knn");
            let naive=document.getElementById("naive");

            
                regr.style.color="blue";
                clas.style.color="blue";
                clus.style.color="blue";
                knn.style.color="blue";
                naive.style.color="blue";

       
    


            regr.addEventListener("click", documentRegr);

            function documentRegr(){
    //console.log(descr);
               
               /*  let xhr = new XMLHttpRequest();
                xhr.open("GET", "https://www.culture-informatique.net/cest-quoi-le-cloud/");
                xhr.addEventListener("load", function () {
                    

                    //docu.innerHTML=xhr.response;

                alert(xhr.response);
                });
                xhr.send();*/

                 docu.innerHTML="<h3> Algorithme de REGRESSION LINEAIRE</h3>";
                 docu.innerHTML+="<hr/>";
                 docu.innerHTML+="Comme les autres modèles de régression, le modèle de régression linéaire est aussi bien utilisé pour ";
                 docu.innerHTML+="chercher à prédire un phénomène que pour chercher à l'expliquer.";
                docu.innerHTML+="Après avoir estimé un modèle de régression linéaire, on peut prédire quel serait le niveau de pour des ";
                docu.innerHTML+="valeurs particulières de .";
                docu.innerHTML+="Il permet également d'estimer l'effet d'une ou plusieurs variables sur une autre en contrôlant par un ";
                docu.innerHTML+="ensemble de facteurs. Par exemple, dans le domaine des sciences de l'éducation, on peut évaluer l'effet de la taille des ";
                docu.innerHTML+="classes sur les performances scolaires des enfants en contrôlant par la catégorie socio-professionnelle des parents ou par";
                docu.innerHTML+="l'emplacement géographique de l'établissement. Sous certaines hypothèses restrictives, cet effet peut être ";
                docu.innerHTML+="considéré comme un effet causal. En apprentissage statistique, la méthode de régression linéaire est considérée comme une méthode d'apprentissage";
                docu.innerHTML+="supervisé utilisée pour prédire une variable quantitative .";
                docu.innerHTML+="Dans cette perspective, on entraîne généralement le modèle sur un échantillon d'apprentissage et on teste ensuite les";
                docu.innerHTML+="performances prédictives du modèle sur un échantillon de test.";

            }

             clas.addEventListener("click", documentClas);

            function documentClas(){
    //console.log(descr);
                docu.innerHTML="<h3>Algorithme CLASSIFICATION</h3> ";
                docu.innerHTML+="<hr/>";
                docu.innerHTML+="La classification non supervis´ee d´esigne un corpus de m´ethodes ayant pour objectif de dresser";
                docu.innerHTML+="ou de retrouver une typologie existante caract´erisant un ensemble de n observations, `a partir";
docu.innerHTML+="de p caract´eristiques mesur´ees sur chacune des observations. Par typologie, on entend que les";
docu.innerHTML+="observations, bien que collect´ees lors d’une mˆeme exp´erience, ne sont pas toutes issues de la mˆeme";
docu.innerHTML+="population homog`ene, mais plutˆot de K populations. Deux exemples peuvent ˆetre consid´er´es :";
docu.innerHTML+="– l’ensemble des clients d’une banque est une collection de n observations, chacune de ces";
docu.innerHTML+="observations ´etant caract´eris´ee par la nature des p transactions bancaires qu’elle r´ealise. Il";
docu.innerHTML+="existe certainement di↵´erents K ”profils types” de clients. L’objectif est alors d’une part";
docu.innerHTML+="de retrouver ces profils types `a partir de l’information sur les transactions bancaires, et";
docu.innerHTML+="d’autre part de d´eterminer, pour chaque observation, `a quel profil type elle correspond.";
docu.innerHTML+="– une cohorte de patients repr´esente un ensemble de n observations, chacune d´ecrite par";
docu.innerHTML+="p mesures physiologiques. Bien qu’ayant tous la mˆeme pathologie, ces patients n’ont pas";
docu.innerHTML+="tous le mˆeme historique m´edical. On souhaite donc dans un premier temps ´etablir une";
docu.innerHTML+="typologie de ces patients en K groupes selon leurs caract´eristiques physiologiques. Dans";
docu.innerHTML+="un deuxi`eme temps, on ´etudiera si la r´eponse au traitement di↵`ere pour des patients issus";
docu.innerHTML+="de groupes di↵´erents.";
docu.innerHTML+="Comme le montrent ces deux exemples, la classification peut ˆetre un objectif en soit (exemple";
docu.innerHTML+="1), ou ne repr´esenter qu’une ´etape de l’analyse statistique (exemple 2).";
docu.innerHTML+="En classification non supervis´ee, l’appartenance des observations `a l’une des K populations";
docu.innerHTML+="n’est pas connue. C’est justement cette appartenance qu’il s’agit de retrouver `a partir des p descripteurs disponibles. En classification supervis´ee au contraire, l’appartenance des n observations";
docu.innerHTML+="aux di↵´erentes populations est connue, et l’objectif est de construire une r`egle de classement";
docu.innerHTML+="pour pr´edire la population d’appartenance de nouvelles observations. On distinguera donc bien";
docu.innerHTML+="les deux probl´ematiques. Dans ce polycopi´e, seule la classification non supervis´ee est abord´ee.";
docu.innerHTML+="Il existe une tr`es large famille de m´ethodes d´edi´ees `a la classification non supervis´ee. Dans";
docu.innerHTML+="ce polycopi´e, nous n’en pr´esentons que 3. Les deux premi`eres, la classification ascendante";
docu.innerHTML+="hi´erarchique et les K-means, font partie des m´ethodes dites de partitionnement et seront pr´esent´ees";
docu.innerHTML+="au chapitre 2. La troisi`eme, appel´ee mod`ele de m´elanges, se place dans un cadre probabiliste et";
docu.innerHTML+="fait l’objet du chapitre 3. Ces di↵´erentes m´ethodes sont illustr´ees au chapitre 4";
            }

             clus.addEventListener("click", documentClus);

            function documentClus(){
    //console.log(descr);
                 docu.innerHTML="<h3>Algorithme CLUSTERING </h3>";
                 docu.innerHTML+="<hr/>";
                docu.innerHTML+=" Le partitionnement de données (ou data clustering en anglais) est une des méthodes d'analyse des données.";
                  docu.innerHTML+="Elle vise à diviser un ensemble de données en différents « paquets » homogènes, en ce sens que les données de chaque ";
                  docu.innerHTML+="sous-ensemble partagent des caractéristiques communes, qui correspondent le plus souvent à des critères de proximité ";
                  docu.innerHTML+="(similarité informatique) que l'on définit en introduisant des mesures et classes de distance entre objets.";

                 docu.innerHTML+="Pour obtenir un bon partitionnement, il convient d'à la fois :";

                docu.innerHTML+="minimiser l'inertie intra-classe pour obtenir des grappes (cluster en anglais) les plus homogènes possibles ;";
                docu.innerHTML+="maximiser l'inertie inter-classe afin d'obtenir des sous-ensembles bien différenciés.";

            }

            knn.addEventListener("click", documentKnn);

            function documentKnn(){
    //console.log(descr);
                docu.innerHTML="<h3 >Algorithme KNN</h3>";
                 docu.innerHTML+="  <hr/>";
               
                 docu.innerHTML+="(k narres neighbours, ou k plus proches voisins) Réalisé par : Wassim Lahbibi2012-2013";
                 docu.innerHTML+=" Le data mining emploie des techniques et des algorithme issus de disciplines scientifiques diverses telles que les statistiques, l‘intelligence";
                 docu.innerHTML+="artificielle ou l‘informatique, pour construire des modèles à partir des données Parmi les techniques utilisées, il ya la méthode de k plus proche voisin.";
                 docu.innerHTML+="la méthode des k plus proches voisins est une méthode de d’apprentissage supervisé.• dédiée à la classification.• En abrégé k-NN ou KNN, de";
                 docu.innerHTML+="langlais k-nearest neighbor.• L’algorithme KNN figure parmi les plus simples algorithmes d’apprentissage artificiel.• L’objectif de l’algorithme est de classé";
                 docu.innerHTML+="les exemples non étiquetés sur la base de leur similarité avec les exemples de la base d’apprentissage .";
                 docu.innerHTML+="Domaine d’activité L’algorithme kNN est utilisée dans de nombreux domaines :• La reconnaissance de formes.• La recherche de nouveaux biomarqueurs";
                 docu.innerHTML+="pour le diagnostic.• Algorithmes de compression.• Analyse d’image satellite• Marketing ciblé";
                 docu.innerHTML+="Principe de fonctionnement Le principe de cet algorithme de classification est très simple. On lui fournit:• un ensemble de données d’apprentissage D• une";
                 docu.innerHTML+="fonction de distance d• et un entier k Pour tout nouveau point de test x, pour lequel il doit prendre une décision, l’algorithme recherche dans D les k points";
                 docu.innerHTML+="les plus proches de x au sens de la distance d , et attribue x à la classe qui est la plus fréquente parmi ces k voisins.";
                 docu.innerHTML+="Exemple•Dans l’exemple suivant, on a 3 classeset le but est de trouver la valeur de la classe de l’exempleinconnu x.•On prend la distance Euclidienne et";
                 docu.innerHTML+="k=5 voisins•Des 5 plus proches voisins, 4 appartiennent à ω1 et 1appartient à ω3, donc x est affecté à ω1, la classe majoritaire";
                 docu.innerHTML+="Comment choisir la valeur de K? K=1 : frontières des classes très complexes  très sensible aux fluctuations des données (variance élevée).  risque de";
                 docu.innerHTML+="sur-ajustement.  résiste mal aux données bruitées. K=n : frontière rigide  moins sensible au bruit  plus la valeur de k est grande plus la résultat";
                 docu.innerHTML+="d’affectation est bien réalisée";
                 docu.innerHTML+="Mesures de distance Mesures souvent utilisées pour la distance dist(xi, xj)• la distance Euclidienne: qui calcule la racine carrée de la somme des";
                 docu.innerHTML+="différences carrées entre les coordonnées de deux points : la distance de Manhattan: qui calcule la somme des valeur absolue des différences entre les";
                 docu.innerHTML+="coordonnées de deux points :• la distance de Minkowski: qui est une métrique de distance générale.";
                 docu.innerHTML+="Notations et Algorithme Soit D = {(x′, c), c ∈ C} l’ensemble d’apprentissage Soit x l’exemple dont on souhaite déterminer la classeAlgorithmeDébut";
                 docu.innerHTML+="pour chaque ( (x′, c) ∈ D) faire Calculer la distance dist(x, x′) fin pour chaque {x′ ∈ kppv(x)} faire compter le nombre d’occurrence de chaque classe fin";
                 docu.innerHTML+="Attribuer à x la classe la plus fréquente;fin";
                 docu.innerHTML+="Avantages  Apprentissage rapide  Méthode facile à comprendre  Adapté aux domaines où chaque classe est représentée par plusieurs prototypes et où";
                 docu.innerHTML+="les frontières sont irrégulières (ex. Reconnaissance de chiffre manuscrits ou dimages satellites)";
                 docu.innerHTML+="Inconvénients  prédiction lente car il faut revoir tous les exemples à chaque fois.  méthode gourmande en place mémoire  sensible aux attributs non";
                 docu.innerHTML+="pertinents et corrélés  particulièrement vulnérable au fléau de la dimensionnalité";
                 docu.innerHTML+="Conclusion dans cette présentation nous avons vue le principe de k plus proche voisin mais il y a d’autres algorithmes utilisés par le data mining comme";
                 docu.innerHTML+=": Arbres de décision Réseaux de neurones Classification bayésienne…";

            }

            naive.addEventListener("click", documentNaive);

            function documentNaive(){
    //console.log(descr);
                docu.innerHTML="<h3>Algorithme K-Moyenne</h3> ";
                 docu.innerHTML+="  <hr/>";
                
                docu.innerHTML+="La classification non supervis´ee d´esigne un corpus de m´ethodes ayant pour objectif de dresser";
                docu.innerHTML+="Le partitionnement en k-moyennes (ou k-means en anglais) est une méthode de partitionnement de données ";
                docu.innerHTML+="et un problème d'optimisation combinatoire. Étant donnés des";
                docu.innerHTML+="points et un entier k, le problème est de diviser les points en k groupes, souvent appelés clusters, de façon à minimiser une certaine fonction. On considère la distance d'un point à";
                docu.innerHTML+="la moyenne des points de son cluster ; la fonction à minimiser est la somme des carrés de ces distances.";
                docu.innerHTML+="Il existe une heuristique classique pour ce problème, souvent appelée méthodes des k-moyennes, utilisée pour la plupart des applications. Le problème est aussi étudié comme un";
                docu.innerHTML+="problème d'optimisation classique, avec par exemple des algorithmes d'approximation";
                docu.innerHTML+="Les k-moyennes sont notamment utilisées en apprentissage non supervisé où l'on divise des observations en k partitions. Les nuées dynamiques sont une généralisation de ce";
                docu.innerHTML+="principe, pour laquelle chaque partition est représentée par un noyau pouvant être plus complexe ";
                docu.innerHTML+="qu'une moyenne. Un algorithme classique de k-means est le même que";
                docu.innerHTML+="l'algorithme de quantification de Lloyd-Max.";
            }


        </script>
</body>

</html>
