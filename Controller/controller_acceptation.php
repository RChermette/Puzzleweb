<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Puzzleweb,vous aide à mettre votre grain de sel sur la Toile</title>
    <?php
         include('../View/head.php');
    ?>
  </head>
  <body  class="grad">
         <?php
         include('../View/menu_horizontal.php');

         include('../View/acceptation.php');
         
         include('../View/footer.php');
         include('../View/js.php');
        ?>
  </body>
</html>