<?php 
include '../../../config.php';
include '../../../Controller/livraisonC.php';
$livraisonC =new livraisonC();
$livraisonC->supprimerlivraison($_GET["id_livraison"]);

header('Location: http://localhost/yummy/View/Back/pages/listlivraison.php');

?>
