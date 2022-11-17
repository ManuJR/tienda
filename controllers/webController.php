<?php

    class WebController
    {
        
        public function __construct( )
        {   
            
        }

        
        public function index(){

          global $session;
          print_r($session);
          require_once($_SERVER['DOCUMENT_ROOT'].FOLDER."/views/web/home.php");

        }

        public function home(){

          require_once($_SERVER['DOCUMENT_ROOT'].FOLDER."/views/web/home.php");

        }

        public function loginpage(){
          global $session;
          require_once($_SERVER['DOCUMENT_ROOT'].FOLDER."/views/web/login.php");

        }


    }

?>