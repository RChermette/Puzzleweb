<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Puzzleweb, nos références !</title>
    <?php
         include('../View/head.php');
    ?>
  </head>
  <body class="grad">
         <?php
         include('../View/menu_horizontal.php');

         include('../View/reference.php');
         
         include('../View/footer.php');
         include('../View/js.php');
        ?>
  </body>
</html>