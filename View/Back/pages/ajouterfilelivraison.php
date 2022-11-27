<?php
include '../../../config.php';
include '../../../Controller/livraisonC.php';
echo $_POST['dateL'] ;
$livraisonC=new livraisonC();
$livraison = new livraison(  $_POST['id_livreur'] , $_POST['dateL'] , $_POST['adresse'] , $_POST['id_commande'] );

$livraisonC->addlivraison($livraison);

header('Location: http://localhost/yummy/View/Back/pages/listlivraison.php');
?>