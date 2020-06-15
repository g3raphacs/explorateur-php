<?php 

//1 - Afficher le contenu du répertoire 

$url = getcwd(); 
  $content=scandir($url);

  print_r($content);
  
  foreach($content as $item ){
        echo $item."<br />";
    }

//2 - Le script ouvre un "enfant" du répertoire dans lequel il se trouve

//initialisation
    $home="home";
    if( !is_dir($home)){
        mkdir('home');
    }
    chdir(getcwd() . DIRECTORY_SEPARATOR . $home);
    $url = getcwd(); 

  $content=scandir($url);

 // print_r($content);

    foreach($content as $item) {
        echo $item."<br />";
    }

//3 - Faire en sorte que .. et . n’apparaissent pas

$display_files = [];
    foreach(
        $content as $item 
    ){
        if($item !== "." && $item !== ".."){
            echo $item."<br />";
        }
    }