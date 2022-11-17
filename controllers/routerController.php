<?php
    /**
     * Controlador Principal que se encarga de manejar las rutas
     */
    class RouterController
    {
        private $method;
        private $uri;

        public function __construct(){
            $this->method   =   $_SERVER['REQUEST_METHOD'];
            $this->uri      =   str_replace( FOLDER, "", $_SERVER['REQUEST_URI']);
        }

        public function manageUris(){
            global $session;
            $webController = new WebController();
            $userController = new UserController();
            
            if( $this->method == "GET" && $this->uri == "/" ){
                
                $webController->index();
                
            }

            if( $this->method == "GET" && $this->uri == "/home" ){

                $webController->home();
                
            }

            if( $this->method == "GET" && $this->uri == "/login" ){

                $webController->loginpage();
                
            }

            if( $this->method == "POST" && $this->uri == "/login" ){
              
                $userController->login( $_POST );
                
            }

            if( $this->method == "POST" && $this->uri == "/logout" ){
              
                $userController->logout();

            }
            if( $this->method == "POST" && $this->uri == "/addToCart" ){
              
                $userController->addToCart( $_POST['id'] );

            }
            

            if( $this->method == "GET" && preg_match("/^\/user\/[0-9]+$/i", $this->uri) ){

                $directory = preg_replace("/[0-9]+$/", "", $this->uri );
                $id = str_replace( $directory, "" , $this->uri );

                $userController = new UserController();
                $userController->show( $id );
                
            }

        }
        
    }
    



?>