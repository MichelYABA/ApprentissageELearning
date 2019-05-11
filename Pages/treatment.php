<?php
    session_start();
    if (key_exists('download', $_GET)){
        
       /* $nom=$_SESSION['user']['name'];
        if ($_SESSION['user']['type']==='text/plain'){
            //$nomfich = "C:/wamp64/www/interface_web/Pages/fichier/uploadedFile.txt"; 
            $nomfich ="/www-dev/interface_web/Pages/fichier/uploadedFile.txt";
            $fichier_taille = filesize($nomfich);
            header("Content-disposition: attachment; filename= 'fichier_2.txt'");
            header("Content-Type: application/force-download");
            //header("Content-Transfer-Encoding: application/octet-stream");
            header("Content-Length: $fichier_taille");
            //header("Pragma: no-cache");
            //header("Cache-Control: must-revalidate, post-check=0, pre-check=0, public");
            //header("Expires: 0");
            readfile($nomfich);
        }else{
            //$nomfich = "C:/wamp64/www/interface_web/Pages/fichier/uploadedFile.xlsx"; 
            $nomfich ="/www-dev/interface_web/Pages/fichier/uploadedFile.xlsx";
            $fichier_taille = filesize($nomfich);
            header("Content-disposition: attachment; filename= $nom");
            header("Content-Type: application/force-download");
            header("Content-Transfer-Encoding: application/octet-stream");
            header("Content-Length: $fichier_taille");
            header("Pragma: no-cache");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0, public");
            header("Expires: 0");
            readfile($nom);
        }*/
       
       // var_dump($_FILES);
    }

    if (key_exists('submit', $_POST)){
        //var_dump($_FILES['fichier']);
        
        //$_SESSION['user'] = $_POST;
       // var_dump($_SESSION['user']);
       // $algo=$_SESSION['user']['typeAlgorithme'];
        //$fichier=$_SESSION['user']['fichier'];    

        $_SESSION['user']=$_FILES['fichier'];
        $fichier=$_SESSION['user']['name']; 
        $type=$_SESSION['user']['type']; 
        $cheminTemp=$_SESSION['user']['tmp_name'];
        //if ($type==='text/plain'){
            ///www-dev/interface_web/Pages/fichier
            //if (move_uploaded_file($cheminTemp, "C:/wamp64/www/interface_web/Pages/fichier/uploadedFile.txt")) {
          //  if (move_uploaded_file($cheminTemp, "/www-dev/interface_web/Pages/fichier/uploadedFile.txt"))  {  
                //echo "Copie de fichier réussie";
           // }else {
               // echo "Problème de copie de fichier";
            //}   
       // }else{
         //   if (move_uploaded_file($cheminTemp, "/www-dev/interface_web/Pages/fichier/uploadedFile.xlsx")) {
               // echo "Copie de fichier réussie";
           // }else {
                //echo "Problème de copie de fichier";
            //}    
        }
        

    

   
    //var_dump($_FILES);

    
    
?>
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
                        <!--img src="http://via.placeholder.com/350x150"-->
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
                <li class="breadcrumb-item active" aria-current="page">Traitement</li>
            </ol>
        </nav>
        <main role="main">
        <?php 
            
        ?>
            <div class="row">
                <div class="col-lg-10 offset-1">
                    <h2>Traitement de votre fichier</h2>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                    <br>

                    <div class="form-group">
                        <a href="treatment.php?download=yes" class="btn btn-primary float-right">Résultat</a>
                    </div>
                </div>

        </main>
        <br/><br/><br/><br/><br/><br/>
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
        <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>