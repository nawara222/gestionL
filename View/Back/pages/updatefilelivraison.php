<?php
include '../../../config.php';
include '../../../Controller/livraisonC.php';

$livraison = new livraison(  $_POST['id_livreur'] , $_POST['dateL'] , $_POST['adresse'] , $_POST['id_commande'] );
$livraisonC= new livraisonC();
$livraisonC->updatelivraison( $livraison , $_GET['id_livraison'] );

header('Location: http://localhost/yummy/View/Back/pages/listlivraison.php');


?>