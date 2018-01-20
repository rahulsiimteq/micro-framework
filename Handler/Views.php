<?php
  function renderView($view) {
    echo "We are in views";
    require 'views/.'.$view.'.php';
  }
 ?>
