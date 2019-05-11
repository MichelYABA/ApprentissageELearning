<?php include_once("trait_bdd.php");

if (key_exists('envoie', $_POST)) {
	# code...
    $nom= htmlentities(trim($_POST['nom']));
    $prenom= htmlentities(trim($_POST['prenom']));
    $mail= htmlentities(trim($_POST['email']));
    $msge= htmlentities(trim($_POST['message']));
    $date=date('Y-m-d H:m:s');

    //ajout du contact dans la base de donnee
    addContact($nom, $prenom, $mail, $msge, $date);

    echo "<script type='text/javascript'>window.location='contact.php';</script>";

}else
    echo "c'est pas bon";

 ?>