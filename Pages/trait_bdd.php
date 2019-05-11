<?php
include_once ('configPDO.php') ;

//$dbb = new db("root", "", "localhost", "projet_annuel", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dbb = new db("21713717", "lathera2018", "mysql.info.unicaen.fr", "21713717_bd", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

function addContact($nom, $prenom, $email, $message, $date)
{
        try{
        global $dbb;
        $stmt = $dbb->datab->prepare("INSERT INTO contact (nom, prenom,  email, commentaire, date_envoi) 
             VALUES (:nom, :pnom, :mail, :com, :d)");
      //  $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':pnom', $prenom, PDO::PARAM_STR);
        $stmt->bindParam(':mail', $email, PDO::PARAM_STR);
        $stmt->bindParam(':com', $message, PDO::PARAM_STR);
        $stmt->bindParam(':d', $date, PDO::PARAM_STR);

        $stat = $stmt->execute();
        
        return $stat;
        }catch(PDOException $e){
                throw new Exception($e->getMessage());
            }
}

function getAllContactsById($id)
{
        global $dbb;
        $getrows = $dbb->getRows("SELECT * FROM contact WHERE id = ?", array($id));
        return $getrows;
}

function getAllContacts()
{
        global $dbb;
        $getrows = $dbb->getRows("SELECT * FROM contact ");
        return $getrows;

}

function getContactByDate(){
    global $dbb;
    $getrows = $dbb->getRows("SELECT nom, prenom, commentaire,  date_envoi FROM contact ORDER BY date_envoi DESC");
    return $getrows;
}

?>

