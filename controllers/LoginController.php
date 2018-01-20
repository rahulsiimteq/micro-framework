<?php

require_once ('views/login.php');
function demo(){
if(isset($_GET['name'])){
  $email = $_GET['name'];
  echo "<p>Welcome $email.</p>";

}
}
?>
