<?php 

    $url = getcwd(); 
    $content=scandir($url);

    print_r($content);
  
    foreach($content as $item ){
        // echo $item."<br />";
    }

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