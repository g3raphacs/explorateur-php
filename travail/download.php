<?php

//Definit l'origine de l'explorateur
$home="home";


    $path= str_replace('"', '',$_POST['path']);
    $file= str_replace('"', '',$_POST['path']);
    // Get parameters
var_dump("la requete existe");
    $file = urldecode('fichier2.txt'); // Decode URL-encoded string
var_dump("file : ".urldecode($file));
    /* Test whether the file name contains illegal characters
    such as "../" using the regular expression */
    if(preg_match('/^[^.][-a-z0-9_.]+[a-z]$/i', $file)){
var_dump("le nom de fichier est valide");
        $filepath = $home."/".'dossier1/fichier2.txt';
        var_dump($filepath);

        // Process download
        if(file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            flush(); // Flush system output buffer
            readfile($filepath);
            die();
        } else {
            http_response_code(404);
            echo "404";
	        die();
        }
    } else {
        die("Invalid file name!");
    }

?>