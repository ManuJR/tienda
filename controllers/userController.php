<?php

    class UserController
    {
        
        public function __construct( )
        {   
            
        }

        public function show( $id ){

            
            require_once($_SERVER['DOCUMENT_ROOT']."/views/user/show.php");
  
        }
        

        public function login(){
            global $session;
            try {

                $user = User::login( $_POST );
        
                header("Location: /${FOLDER}" );
              
            } catch (\Throwable $th) {
                global $error;
                $error = $th->getMessage();
                die($error);
            }
        }

        public function logout(){
            global $session;
            try {

                $user = User::logout( );
                
                header("Location: /${FOLDER}" );
              
            } catch (\Throwable $th) {
                global $error;
                $error = $th->getMessage();
                die($error);
            }
        }

        public function addToCart( $id ){
            global $session;
            try {
                $session->addToCart( $id );
                
                header("Location: /${FOLDER}" );
              
            } catch (\Throwable $th) {
                global $error;
                $error = $th->getMessage();
                die($error);
            }
        }

    }
    


?>