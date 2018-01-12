<?php
//session_start();
$_SESSION['estAuthentifier']=false;
var_dump($_SESSION['estAuthentifier']);
//session_destroy();    
  header('Location: menu.php');      


?>