<?php
include '../../../config.php';
include '../../../Controller/livreurC.php';

$livreurC=new livreurC();
$livreur = new Livreur( $_POST['nom'] , $_POST['numero'] );

$livreurC->addlivreur($livreur);

header('Location: http://localhost/yummy/View/Back/pages/listlivreur.php');
?>