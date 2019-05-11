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
                <li class="breadcrumb-item active" aria-current="page">Documentation</li>
            </ol>
        </nav>
        <main role="main">

            <div class="row">
            <div class="col-lg-3">
                    <h6 class="text-center">Liste des algorithmes</h6>
                    <div class="card">
                        <div class="card-body">
                             <ul>
                                <li style="list-style-type:none; text-align:center; margin-bottom:2px; background-color:#e9ecef; border-radius:6px 6px 6px 6px;" ><a id="regr" href="">Regression</a></li>
                                <li style="list-style-type:none; text-align:center; margin-bottom:2px; background-color:#e9ecef; border-radius:6px 6px 6px 6px;"><a  id="clas" href="">Classification</a></li>
                                <li style="list-style-type:none; text-align:center; margin-bottom:2px; background-color:#e9ecef; border-radius:6px 6px 6px 6px;"  ><a id="clus" href="">Clustering</a></li>
                            </ul>
                        </div>
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
             let docu=document.getElementById("doc");
        
            let regr=document.getElementById("regr");
            let class=document.getElementById("clas");
            let clus=document.getElementById("clus");

             regr.addEventListener("click", documentRegr);

            function documentRegr(event){
    //console.log(descr);
                docu.innerHTML="vas-y !!!";
            }


        </script>
</body>

</html>
