<?php
    define("_DIR_ROOT", str_replace('\\', '/', __DIR__));

    // xu ly http root
    if (!empty($_SERVER["HTTPS"]) && $_SERVER['HTTPS'] == 'on') {
        $web_root = 'https://'.$_SERVER['HTTP_HOST'];
    } else {
        $web_root = 'http://'.$_SERVER['HTTP_HOST'];
    }
    
    $folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(_DIR_ROOT));
    
    $web_root = $web_root.$folder;

    define("_WEB_ROOT", $web_root);

    require_once('configs/routes.php');
    require_once("app/app.php"); // load app
    require_once('core/Controller.php'); // load base controller
?>