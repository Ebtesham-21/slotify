<?php 
    class Account {
        private $errorArray;
        public function __construct() {

        }
        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2){
            $this->validateUsername($un);
	        $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);
        }

        private function validateUsername($un){
	
        }
        private function validateFirstName($fn){
        
        }
        private function validateLastName($un){
        
        }
        private function validateEmails($em, $em2){
        
        }
        private function validatePasswords($pw, $pw2){
        
        }
    }
?>
