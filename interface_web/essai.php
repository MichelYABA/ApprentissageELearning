<?php
$resultat = "";

//if (isset($_POST['envoie'])) {
  //  $nom = $_POST['nom'];
  //  $prenom = $_POST['prenom'];
  //  $age = $_POST['age'];
 // }
  $donnees=$_GET;
	$donnes=array(
		'nom'=>'yaba',
		'prenom'=>'michel',
		'age'=>'21',
		'envoie'=>'envoie',);
  var_dump($donnees);
  $url= "http://localhost:8888/?token=0db62ff1f1e7a021f1bcc4c2355f3b331fb821b7d7bfee5d";

// Get cURL resource
	$curl = curl_init();
	//curl_setopt($curl, CURLOPT_PROXY, "http://127.0.0.1:8888");
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_CAINFO, "essaie");
	curl_setopt($curl, CURLOPT_VERBOSE, 1);
	curl_setopt($curl, CURLOPT_USERAGENT, 'User-Agent: curl/7.39.0');
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//on retourne le contenu telecharge dans une chaine au lieu de l'afficher directement
	//curl_setopt($curl, CURLOPT_POST, true);//on peut effectuer les requetttes de type post
	curl_setopt($curl, CURLOPT_FAILONERROR, true);//on gere les codes d'erreurs eventuels
	//curl_setopt($curl, CURLOPT_POSTFIELDS, $donnees);//on recupere les variables de type post

	//$output=curl_exec($curl);
	$result=curl_exec($curl);

	//if(curl_errno($curl)){
            // Le message d'erreur correspondant est affiché
      //      echo "ERREUR correspondantes : ".curl_error($curl);
      //}

	curl_close($curl);

	echo $result;

	//echo $result;
// Set some options - we are passing in a useragent too here
//curl_setopt_array($curl, array(
 //   CURLOPT_RETURNTRANSFER => 1,
 //   CURLOPT_URL => 'http://127.0.0.1:8888?nom=$nom&prenom=$prenom&age=$age',
 //   CURLOPT_USERAGENT => 'Codular Sample cURL Request'
//));

// Send the request & save response to $resp
//$resp = curl_exec($curl);
//$tab = json_decode($resp);

//var_dump($tab, true);


// Close request to clear up some resources
//curl_close($curl);

 //$resultat = "<ul>";
    //foreach($resp as $val) {
     //   $resultat .= "<li>" . $ville. "</li>";
    //	echo "<li>" .$val. "</li>";
   // }
   // $resultat .= "</ul>";
//}
?>
<!Doctype>
	<html>
		<head>
			<title>Essai</title>
			<meta chrset="utf-8" />
		</head>

		<body>
			<form method="GET" action="essai.php">
				<label for="nom">Nom</label>
					<input id="nom" name="nom" />
				<label for="pnom">Prenom</label>
					<input id="pnom" name="prenom"/>
				<label for="age">Age</label>
					<input id="age" name="age"/>
				<button name="envoie" type="submit" value="envoie">Envoie</button>
			</form>

			 <?php //echo $resultat; ?>

		    <!--h2>Code PHP de cette page</h2>
		    <pre><code><?php //highlight_file("phpClientREST.php"); ?></code></pre-->
		</body>
	</html>