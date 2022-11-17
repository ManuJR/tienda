<?php
    ini_set('display_errors', "1");
    error_reporting(E_ALL);
    
  const FOLDER = "";
  // Receptor de TODAS las peticiones
  require_once($_SERVER['DOCUMENT_ROOT'].FOLDER."/config/ini.php");
  
  $session = new Session();
  $rc = new RouterController();
  $rc->manageUris();
  

?>