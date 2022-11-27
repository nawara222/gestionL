<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
  <title>Coupon</title>
 <link rel="stylesheet" href="https://az813057.vo.msecnd.net/testdrive/var-fonts/font-declarations.css"><link rel="stylesheet" href="./style.css">


</head>
<body>
<!-- partial:index.partial.html -->
<div class="l-col-right ticket-wrap" aria-label="A fake boat ticket demonstrating mixing font weights and widths">
  <div class="ticket" aria-hidden="true">
    <div class="ticket__header">
      <div class="ticket__co">
       
        <span class="ticket__co-name">Yummy ending</span>
        <span class="u-upper ticket__co-subname">Restauration</span>
      </div>
    </div>
    <div class="ticket__body">
      <p class="ticket__route">Coupon </p>
      <p class="ticket__description">Commande n° <?php echo $_POST['id_commande'] ?></p>
      <div class="ticket__timing">
        <p>
          <span class="u-upper ticket__small-label">Date</span>
          <span class="ticket__detail">  <?php echo $_POST['dateL'] ?> </span>
          
        </p>
        <p>
          <span class="u-upper ticket__small-label">Nom du Livreur</span>
          <span class="ticket__detail"> <?php echo $_POST['nom'] ?> </span>
        </p>
        <p>
          <span class="u-upper ticket__small-label">Numero du Livreur</span>
          <span class="ticket__detail"> <?php echo $_POST['numero'] ?></span>
        </p>
      </div>
      <p class="ticket__fine-print">Livrée à </p>
      <p class="u-upper ticket__admit"> <?php echo $_POST['adresse'] ?></p>
      <img class="ticket__barcode" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/515428/barcode.png" alt="Fake barcode" />
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
