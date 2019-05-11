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
                            <a class="nav-link" href="#">Documentation</a>
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
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
        <main role="main">

            <div class="row">
                <div class="col-lg-6" style="margin-left:10px;">
                    <h3>Nous contacter</h3>
                    <form id="formulaire" action="save_contact.php" method="POST">

                        <div class="form-group" id="nom">
                            <!--label for="nom">Nom</label-->
                            <input type="text" name="nom" class="form-control" id="input_nom" placeholder="Votre nom" style="width:500px;">
                            <span class="erreur"></span>
                        </div>
                        <div class="form-group" id="prenom">
                            <!--label for="prenom">Prenom</label-->
                            <input type="text" name="prenom" class="form-control" id="input_prenom" placeholder="Votre prenom" style="width:500px;">
                            <span class="erreur"></span>
                        </div>
                        <div class="form-group" id="mail">
                            <!--label for="email">Email</label-->
                            <input type="email" name="email" class="form-control" id="input_mail" placeholder="Votre adresse mail" style="width:500px;">
                            <span class="erreur"></span>
                        </div>
                        <div class="form-group" id="message">
                            <!--label for="message">Message</label-->
                            <textarea name="message" class="form-control" id="text_message" rows="3" cols="10" placeholder="Laisser un message pour nous aider à améliorer cette plateforme. " style="width:500px;"></textarea>
                            <span class="erreur"></span>
                        </div>
                        <button type="submit" name="envoie" id="envoie" class="btn btn-primary" style="position:relative; ">Envoyer</button>
                        <button type="reset" id="raz" class="btn btn-primary">annuler</button>
                    </form>
                </div>

                <div  class="col-lg-5">
                    <h4>Derniers messages</h4>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-12" style="overflow:auto;">
                        <?php 
                            include("tableContact.php");                      
                        ?>
                        </div>
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
</body>

</html>