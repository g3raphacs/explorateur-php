<?php
// DEBUG_________________________________________________________________________________________________________
    //afficher les erreurs PHP
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
// ______________________________________________________________________________________________________________

// INITIALISATION________________________________________________________________________________________________
    //Definit l'origine du site
    $www='.';

    //Definit l'origine de l'explorateur
    $home="home";
    $origin = ($www . DIRECTORY_SEPARATOR . $home. DIRECTORY_SEPARATOR);
    $url='';
    $file='';
    $path='';

// ______________________________________________________________________________________________________________


// REQUETE_______________________________________________________________________________________________________
    // Recupère la requète:
    if(isset($_POST)){
        $path=str_replace('"', '',$_POST['path']);
        $file= str_replace('"', '',$_POST['file']);
        $url=$origin.$path.$file;

        if (!copy($file, $newfile)) {
            echo "La copie $file du fichier a échoué...\n";
        }

        
    }
// ______________________________________________________________________________________________________________