<?php
session_start();

if(isset($_POST['user']) && isset($_POST['password']) && isset($_POST['urlCourante'])) {
    if(($_POST['user'] !== '') && ($_POST['password'] !== '') && ($_POST['urlCourante'] !== '')) {

    	//C'est la qu'on fera le traitement de l'identifiant et du mot de passe avant acceptation
        $reponse = 'ok';
        $url = $_POST['urlCourante'];
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['connexion'] = "authentifié";

    header('Location: '.$url);
        
    } else {
        $reponse = 'Les champs sont vides';
    }
}
 else {
    $reponse = 'Tous les champs ne sont pas parvenus';
}

?>
