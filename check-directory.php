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

    //Teste si le dossier home existe et sinon le crée
    if( !is_dir($home)){
        mkdir('home');
    }
    // initialise la variable de tri
    $sort='name';
// ______________________________________________________________________________________________________________


// REQUETE_______________________________________________________________________________________________________
    // Recupère la requète:
    if(isset($_POST)){
        // recupère le nouveau chemin et change l'URL
        $newPath= str_replace('"', '',$_POST['path']);
        $url=$origin.$newPath;
        // recupère la nouvelle variable de tri
        $sort= $_POST['sort'];
    }else{
        $url=$origin;
    }
// ______________________________________________________________________________________________________________


// TRAITEMENT____________________________________________________________________________________________________
    //Scan les fichiers et les ajoute au tableau content
    $content=scandir($url);

    //crée un tableau element qui contiendra les informations de chaque fichier
    $element=[];

    //Parcours le tableau content et rempli le tableau element avec les informations des fichiers
    for ($i=0 ; $i<count($content); $i++){
        if (($content[$i]!=='.') && ($content[$i]!=='..')){
            $info = new SplFileInfo($url.$content[$i]);
            $element[] = array('name' => $content[$i], 'type' => $info->getExtension(), 'date' => $info->getCTime(), 'size' => $info->getSize());
        }
    }
    //crée un tableau contenant les elements separés de l'URL
    $tempPath = explode('/', $url);
    $path=[];

    for ($i=0 ; $i<count($tempPath); $i++){
        if (($tempPath[$i]!=='.') && ($tempPath[$i]!=='')){
            $path[] = $tempPath[$i];
        }
    }
// ______________________________________________________________________________________________________________


// REPONSE_______________________________________________________________________________________________________
    echo json_encode(
        array(
            //Envoi les elements de l'URL
            'path' => $path,
            //Envoi informations de chaque fichier
            'elements' => $element,
        )
    );
// ______________________________________________________________________________________________________________
