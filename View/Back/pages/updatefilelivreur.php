<?php
include '../../../config.php';
include '../../../Controller/livreurC.php';

$livreur = new livreur ($_POST['nom']  ,$_POST['numero']); 
$livreurC= new livreurC();
$livreurC->updatelivreur( $livreur , $_GET['id_livreur'] );

header('Location: http://localhost/yummy/View/Back/pages/listlivreur.php');


?>