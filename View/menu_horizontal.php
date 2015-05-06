<header class="col-lg-12 menu_horizontal2">
<?php
//Paramètres Menu Horizontal
//Nom du site
$nomDusite = 'Puzzleweb.com';
//Lien 1 "foncé"
$nomLien1 = 'Devis Gratuit';
$urlLien1 = '/Puzzleweb/Grain-de-sel/';

//Menu déroulant titre
$nomMenuDeroulant = 'Nos offres';
//Sous-menus

$nomSousLien1 = 'Toutes nos offres';
$urlSousLien1 = '/Puzzleweb/Toutes-nos-offres/';
//Sous- 1 
$nomSousLien1_1 = 'Visibilité';
$urlSousLien1_1 = '/Puzzleweb/Offre/visibilite/';
//Sous-menus
//Sous- 2 
$nomSousLien1_2 = 'Impact';
$urlSousLien1_2 = '/Puzzleweb/Offre/impact/';
//Sous-menus
//Sous- 3 
$nomSousLien1_3 = 'Premium';
$urlSousLien1_3 = '/Puzzleweb/Offre/premium/';
//Sous-menus
//Sous- 1 
$nomSousLien1_4 = 'Nos packs';
$urlSousLien1_4 = '/Puzzleweb/Offre/packs/';

$nomSousLien1_5 = 'Promotions du moment';
$urlSousLien1_5 = '/Puzzleweb/Offre/promotions/';

$url = $_SERVER['REQUEST_URI'];

?>
<div class="menu_horizontal">
<!--
<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 title">
  <div class="col-xs-2 col-sm-2 col-md-2  col-lg-2 puzzlewebnews_logo">pw</div>
  <div class="col-xs-10 col-sm-10 col-md-10  col-lg-10">
  Pepper-web.com, vous aide à mettre votre grain de sel sur la Toile
  </div> 
</div>
-->
<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12">
<nav class="navbar navbar-default">
  <div class="container-fluid">
  
    <div class="navbar-header backcolor">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/Puzzleweb/Home/">
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Puzzleweb.fr</a>
      <!-- -->
    </div>

    <!-- Début de la barre de navigation -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <!-- Lien marqué plus sombre pour ressortir ex:Accueil -->
        <li class="active"><a href="<?php echo $urlLien1; ?>"><?php echo $nomLien1; ?><span class="sr-only">(current)</span></a></li>

        <!-- Lien menu déroulant -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $nomMenuDeroulant; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <!-- les sous menus -->
           <li><a href="<?php echo $urlSousLien1; ?>"><?php echo $nomSousLien1; ?></a></li>
            <li class="divider"></li>
            <li><a href="<?php echo $urlSousLien1_1; ?>"><?php echo $nomSousLien1_1; ?></a></li>
            <li><a href="<?php echo $urlSousLien1_2; ?>"><?php echo $nomSousLien1_2; ?></a></li>
            <li><a href="<?php echo $urlSousLien1_3; ?>"><?php echo $nomSousLien1_3; ?></a></li>
            <li><a href="<?php echo $urlSousLien1_4; ?>"><?php echo $nomSousLien1_4; ?></a></li>
            <li class="divider"></li>
            <li><a href="<?php echo $urlSousLien1_5; ?>"><?php echo $nomSousLien1_5; ?></a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nos références <span class="badge">3</span> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <!-- les sous menus -->
            <li><a href="/Puzzleweb/Reference/">Toutes nos références</a></li>
            <li class="divider"></li>
            <li><a href="/Puzzleweb/Reference/sante/">Santé</a></li>
            <li><a href="/Puzzleweb/Reference/art/">Art</a> </li>
            <li><a href="/Puzzleweb/Reference/cv/">Site CV</a> </li>
          </ul>
        </li>
        <li role="presentation"><a href="/Puzzleweb/Module/">Nos modules <span class="badge">10</span></a></li>
      </ul>
        
      <!-- deuxième partie du menu -->
      <ul class="nav navbar-nav navbar-right">
      <!-- encore un lien normal exemple contact -->
        <li>
        <?php
        if(!isset($_SESSION['connexion']) || $_SESSION['connexion'] != 'authentifié')
        {
        ?>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
          <ul class="dropdown-menu" role="menu">
          <div class="center">
          <form action="/Puzzleweb/Connexion/" id="connexionForm" method="post">
         <p style="color: #999;">Identifiant: </p><input id="user" name="user" autocomplete="off" class="connexion_input" type="text" required>
         <input name="urlCourante" type="hidden" value="<?php echo $url; ?>" required><br/>
         <p style="color: #999;">Mot de passe: </p><input id="password" name="password" class="connexion_input" type="password" required><br/><br/>
          <button id="valider_connexion" name="valider" class="btn btn-primary">Se connecter</button>
         </form><br/>
         <form action="/Puzzleweb/Inscription/" id="inscriptionForm" method="post">
          <button name="inscription" class="btn btn-success">S&apos;inscrire</button>
         </form>
         </div>
          </ul>
        </li>
        <?php
        }
        if(isset($_SESSION['connexion']) && $_SESSION['connexion'] == 'authentifié')
        {
        ?>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $_SESSION['user'];?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <!-- les sous menus -->
            <li><a href="">Espace perso</a></li>
            <li><a href="/Puzzleweb/Deconnexion/?deconnexion=<?php echo $url; ?>">Déconnexion</a></li>
          </ul>
        </li>
        <?php
        }
        ?>
         </li>
        <!-- Deuxième menu déroulant ex: Paramètres -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  </div>
</div>

</header>