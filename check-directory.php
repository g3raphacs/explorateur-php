<?php
    //afficher les erreurs
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    //Definit l'origine du site
    $www='.';

    //Definit l'origine de l'explorateur
    $home="home";
    $origin = ($www . DIRECTORY_SEPARATOR . $home. DIRECTORY_SEPARATOR);
    //Teste si le dossier home existe et sinon le crée
    if( !is_dir($home)){
        mkdir('home');
    }

    $sort='name';

    if(isset($_POST)){
        $newPath= str_replace('"', '',$_POST['path']);
        $sort= $_POST['sort'];
        $url=$origin.$newPath;
        echo $url;
    }else{
        $url=$origin;
    }

    //Scan les fichiers et les ajoute au tableau content
    $content=scandir($url);

    //Scan les fichiers et le ajoute au tableau content
    $element=[];

    for ($i=0 ; $i<count($content); $i++){
        if (($content[$i]!=='.') && ($content[$i]!=='..')){
            $info = new SplFileInfo($url.$content[$i]);
            $element[] = array('name' => $content[$i], 'type' => $info->getExtension(), 'date' => $info->getCTime(), 'size' => $info->getSize());
        }
    }

    $tempPath = explode('/', $url);
    $path=[];

    for ($i=0 ; $i<count($tempPath); $i++){
        if (($tempPath[$i]!=='.') && ($tempPath[$i]!=='')){
            $path[] = $tempPath[$i];
        }
    }


    echo json_encode(
        array(
            'path' => $path,
            'elements' => $element,
        )
    );
