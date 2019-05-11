<?php
    include_once("trait_bdd.php");
    //echo "salut";
    
	$contacts=getContactByDate();
	if (!empty($contacts)) {
      //  $i=0;
        foreach ($contacts as $key => $value) {
            $contact=$value;
		 	$nom=$contact['nom'];
             $prenom=$contact['prenom'];
             $message=$contact['commentaire'];
             $date=$contact['date_envoi'];

            
             echo "<h6 style='background-color:#f8f9fa;'>".$nom."  ".$prenom."  <em> ".date_format(new datetime($date), 'd-m-Y H:m:s')."</em></h6>";
            echo "         ".$message;
            }
    }

?>