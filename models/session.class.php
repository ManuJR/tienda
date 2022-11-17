<?php
    class Session{

        private $data;
        private $logged; // true - false
        private $cart = []; 
        

        public function __construct()
        {
            session_start();

            $this->logged = false;
            $this->data = [];

            // hay login?
            if( !empty($_SESSION['email'])){
                $this->logged = true;
                $this->data = $_SESSION['email'];
            }
            if( !empty($_SESSION['cart'])){
                $this->cart = $_SESSION['cart'];
            }
        }

        // Guardar info en SESSION
        public function save( $email ){
            $_SESSION['email'] =  $email;
            $this->logged = true;
            $this->data = $_SESSION;
        }

        public function isLoggedIn(){
            return $this->logged;
        }

        public function getData(){
            return $this->data;
        }

        public function getDataEmail(){
            return $this->data['email'];
        }   

        public function addToCart( $item ){
           array_push( $this->cart, $item );
           print_r($this->cart);
           $_SESSION['cart'] = $this->cart;
           print_r($_SESSION);

        }
        public function removeToCart( $item ){
        //     array_push( $this->cart, $item );
        //    $SESSION['cart'] = $this->cart;
        }

        public function added( $item ){
            foreach ($this->cart as $key => $id) {
                if($id == $item){
                    return true;
                }
            }
            return false;
        }

        public function destroy(){
            session_unset();
            setcookie( session_name(),"", -1 );
            session_destroy();
            $this->logged = false;
            $this->data = [];
        }

    }

?>