<?php 
include '../../../config.php';
include '../../../Controller/livreurC.php';
$livreurC =new livreurC();
$livreurC->supprimerlivreur($_GET["id_livreur"]);

header('Location: http://localhost/yummy/View/Back/pages/listlivreur.php');

?>
