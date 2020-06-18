<?php

// INITIALISATION________________________________________________________________________________________________
    //Definit l'origine du site
    $www='.';

    //Definit l'origine de l'explorateur
    $home="home";
    $origin = ($www . DIRECTORY_SEPARATOR . $home. DIRECTORY_SEPARATOR);
    $url;

// ______________________________________________________________________________________________________________


// REQUETE_______________________________________________________________________________________________________
    // Recupère la requète:
    if(isset($_POST)){
        $path=str_replace('"', '',$_POST['path']);
        $url=$origin.$path;
        $file=$_POST['file'];

        chdir($url);

        if( file_exists ( $file)){
            unlink( $file );
        }
    }
// ______________________________________________________________________________________________________________