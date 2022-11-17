<?php

    class User {
        private $id;
        private $nombre;
        private $email;
        private $password;
        private $created_at;
       
        public function __construct( $params ){
            foreach ($params as $key => $value) {
                $this->$key = $value;
            }
        }

        function __get($name){
            return $this->$name;
        }

        static function login(){
            global $session;
            $session->save( $_POST['email'] );

        }
        static function logout(){
            global $session;
            $session->destroy( );
        }

    }
    

?>