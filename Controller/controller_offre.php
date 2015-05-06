<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Puzzleweb, nos offres</title>
    <?php
         include('../View/head.php');
    ?>
  </head>
  <body class="grad">
         <?php
         include('../View/menu_horizontal.php');
         include('../View/offre.php');
          $offre=(isset($_GET['offre'])) ? $_GET['offre'] : "visibilite";
          offre($offre);
         
         include('../View/footer.php');
         include('../View/js.php');
        ?>
  </body>
</html>