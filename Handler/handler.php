<?php

    error_reporting(0);

    $url = $_REQUEST['url'];
    $baseUrl = 'views/index.html';
    if (!isset($url)) {
      require $baseUrl;
    } else if(isset($url)) {
      $url = rtrim($url, '/');
      $url = explode('/',$url);
      $newUrlController = ucfirst($url[0])."Controller";

      $file = 'controllers/'.$newUrlController.'.php';

      if(file_exists($file)){
        require 'interceptors/Interceptor.php';
        require $file;
      } else {
        echo "<center><h1>Invalid route: $file</h1></center>";
      }
    }

 ?>
