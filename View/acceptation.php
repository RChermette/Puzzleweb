<?php
if(isset($_POST['nom']) && isset($_POST['titre']) && isset($_POST['titre'])) {
    if(($_POST['nom'] !== '') && ($_POST['titre'] !== '')) {
        $contenu = $_POST['nom'].',\n : '. $_POST['lien'];
        mail('puzzleweb.contact@gmail.com', $_POST['titre'] , $contenu);
    } else {
        $reponse = 'Les champs sont vides';
    }
} else {
    $reponse = 'Tous les champs ne sont pas parvenus';
}
?>
<br/><br/><br/>
<section class="row">
<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12">
<div class=" article graindesel">
<div class="article-header graindesel_header">
 Votre demande sera traitée dans les plus brefs délais.
 </div>
 <div class="article-content">
   <p class="center">
   
   </p>
  <form class="form-horizontal" action="../Controller/controller_index.php" id="commentaire" method="post">
<div class="control-group">
  <div class="controls">
    <button id="valider" name="retour" type="submit" class="btn btn-primary">Retour à l'accueil</button>
  </div>
</div>
</form>
</div>
</div>
 </div>
</section>