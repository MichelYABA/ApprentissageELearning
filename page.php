<?php
//$wikipediaURL = 'http://fr.wikipedia.org/wiki/Megadeth';
$wikipediaURL = 'http://127.0.0.1:8888';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $wikipediaURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Le blog de Samy Dindane (www.dinduks.com)');
$resultat = curl_exec ($ch);
curl_close($ch);

$wikipediaPage = new DOMDocument();
$wikipediaPage->loadHTML($resultat);

foreach($wikipediaPage->getElementsByTagName('div') as $div){
    if($div->getAttribute('id') == "bodyContent"){
    	$description = '<p>' . $div->getElementsByTagName('p')->item(0)->nodeValue. '</p>';
    }
}




//echo phpinfo();
?>