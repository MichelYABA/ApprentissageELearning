<?php
$resultat = "";

if (isset($_POST['requete'])) {
    $req = urlencode($_POST['requete']);
    $url= "http://api.geonames.org/searchJSON?q={$req}&maxRows=10&username=unicaen1";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_PROXY, "http://proxy.unicaen.fr:3128");
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($curl);
    $tab = json_decode($data)->geonames;

    var_dump($tab);
    
    $resultat = "<ul>";
    foreach($tab as $ville) {
        $resultat .= "<li>" . $ville->name . "</li>";
    }
    $resultat .= "</ul>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Service</title>
    <style>
        pre {
            margin: 1em 3em; padding: 0 2em; background-color: ivory;
            border: 1px inset black; font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Recherche de lieux</h2>
    <form method="POST">
        <input type="text" name="requete" />
        <button type="submit">Envoyer</button>
    </form>
    <?php echo $resultat; ?>

    <!--h2>Code PHP de cette page</h2>
    <pre><code><?php //highlight_file("phpClientREST.php"); ?></code></pre-->
</body>
</html>
