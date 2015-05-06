<br/><br/><br/>
<section class="row">
<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1  col-lg-10 col-lg-offset-1">
<div class=" article graindesel">
<div class="article-header graindesel_header">
 <h1>S'inscrire</h1>
 </div>
 <div class="article-content">
 <div id="inscription_succes"div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Inscription effectuée avec succès ! 
Un mail de confirmation vous sera envoyé dans les minutes qui suivent.</div>
 En vous inscrivant à Pepper-web.com, vous aurez accès à vos informations personnels ainsi qu'au forum.
   <p class="center">
  <form class="form-horizontal" action="../Controller/controller_inscription.php" id="commentaire" method="post">
<div class="control-group">
  <label class="control-label" for="nom">Adresse mail:</label>
  <div class="controls">
    <input id="nom" name="nom" type="mail" autocomplete="off" placeholder="Veuilliez saisir votre adresse mail" class="input-large graindesel_input" required>
  </div>
  <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Attention !</strong> Cette adresse e-mail est invalide, ou est déjà associé à un compte Pepper-web.
  </div>

  <label class="control-label" for="pass">Mot de passe:</label>
  <div class="controls">
    <input id="pass" name="passe" type="text" placeholder="Veuilliez saisir un mot de passe" class="input-large graindesel_input" required>
    <p class="help-block">6 caractères minimums</p>
  </div>
  <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Attention !</strong> Ce mot de passe est invalide !
  </div>

   <label class="control-label" for="pass">Confirmer le mot de passe:</label>
  <div class="controls">
    <input id="pass" name="passe" type="text" placeholder="Veuilliez confirmer le mot de passe" class="input-large graindesel_input" required>
  </div>
  <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Attention !</strong> Ce mot de passe est différent du précédent !
  </div>
</div>


<div class="control-group">
  <label class="control-label" for="valider"></label>
  <div class="controls">
    <button id="valider" name="valider" type="submit" class="btn btn-primary">S'inscrire</button>
  </div>
</div>
</form>
<br/>
</div>
</div>
 </div>
</section>