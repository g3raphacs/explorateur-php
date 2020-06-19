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
// SUPPRIMER LES FICHIERS DE COPY

//Scan les fichiers et les ajoute au tableau content
$content=scandir('./copy/');

//Parcours le tableau content et rempli le tableau element avec les informations des fichiers
for ($i=0 ; $i<count($content); $i++){
    if (($content[$i]!=='.') && ($content[$i]!=='..')){
        unlink( './copy/'.$content[$i] );
    }
}


// REQUETE_______________________________________________________________________________________________________

    if(isset($_POST)){
        $path=str_replace('"', '',$_POST['path']);
        $file= str_replace('"', '',$_POST['file']);
        $url=$origin.$path.$file;

        if( file_exists ($url)){
            copy($url, './copy/'.$file);
            $status=true;
            $message = 'copied';
        }else{
            $status=false;
            $message = 'file do not exists';
        }
    }
// ______________________________________________________________________________________________________________
echo json_encode(
    array(
        'status' => $status,
        'message' => $message,
    )
);