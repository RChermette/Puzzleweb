<?php 

function offre($offre)
{
?>
<br/><br/><br/>
<section class="row">
<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-1">
<div class=" article offre-<?php echo $offre; ?>">
<div class="article-header offre-header-<?php echo $offre; ?> border_radius">
 Offre <?php echo $offre; ?>
 </div>
 <div class="article-content">
 <?php
 switch($offre)
 {
 	case "visibilite":
 		$prix = 99;
 		$prix_mois = 49;
 		prix($offre,$prix,$prix_mois);
 		offre_1($offre);
 	break;

 	case "impact":
 		$prix = 299;
 		$prix_mois = 49;
 		prix($offre,$prix,$prix_mois);
		offre_2($offre);
 	break;

 	case "premium":
 		$prix = 799;
 		$prix_mois = 49;
 		prix($offre,$prix,$prix_mois);
		offre_3();
 	break;

 	case "packs":
		offre_4();
 	break;
 }
 ?>
 </div>
    </div>
  </div>
</section>
<?php
}
function prix($offre, $prix, $prix_mois)
{
	?>
		 <div class="row">
      <div class="offre-prix center offre-prix-<?php echo $offre; ?>">
      <br/>à partir de<br/><?php echo $prix; ?>€<br/>
      + <?php echo $prix_mois; ?>€ /mois</div>
      </div>
      <?php
}

function offre_1()
{
	?>
        <p>Offre de base, comprenant un site standard adapté au petit budget
         cette solution est néanmoins efficace pour se faire une place sur le marché du web</p>
	<?php
}

function offre_2()
{
	?>

	<?php
}

function offre_3()
{
	?>

	<?php
}

function offre_4()
{
	?>

	<?php
}
?>
