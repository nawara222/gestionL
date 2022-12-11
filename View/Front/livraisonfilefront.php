<?php

include '../../config.php';
include 'livreurC.php';
include 'livraisonC.php';

$livreurC=new livreurC();

$livraisonC=new livraisonC();
$livreur=$livreurC->AffecterLivreur();

session_start();
    $_SESSION['id_commande'] = '678';

$livraison = new livraison(  $livreur['id_livreur'] , $_POST['dateL'] , $_POST['adresse'] ,  $_SESSION['id_commande'] );

$livraisonC->addlivraison($livraison);
?>

<form action="http://localhost/yummy/View/Front/reculivraison.php" method="POST" id="form">
    <div class="row g-3">
     
       
            <div class="col-md-6">
            <input type="hidden" class="form-control" name="dateL" id="dateL" placeholder="dateL" value=<?php echo $_POST['dateL'] ?> >
            </div>

            <div class="col-md-6">
            <input type="hidden" class="form-control" name="adresse" id="adresse" placeholder="adresse" value=<?php echo $_POST['adresse'] ?> >
            </div>

            <div class="col-md-6">
            <input type="hidden" class="form-control" name="id_commande" id="id_commande" placeholder="id_commande" value=<?php echo  $_SESSION['id_commande'] ?> >
            </div>

            <div class="col-md-6">
            <input type="hidden" class="form-control" name="nom" id="nom" placeholder="nom" value=<?php echo  $livreur['nom'] ?> >
            </div>

            <div class="col-md-6">
            <input type="hidden" class="form-control" name="numero" id="numero" placeholder="numero" value=<?php echo  $livreur['numero'] ?> >
            </div>

            
        <div class="col-12">
            <button  class="btn bg-gradient-primary w-100 my-4 mb-2" type="submit">Cliquez pour afficher votre Coupon</button>
        </div>
    </div>
</form>
