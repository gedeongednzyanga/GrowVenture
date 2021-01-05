<?php
    require_once('views/View.php');
    class ControllerSingle{

        private $_view;
        
        public function __construct($url){
           if(isset($url) && count($url)>1)
           throw new Exception("Page introuvable.");
           else
           $this->signle();
        }

        private function signle(){
            $this->_view = new View("Single");
            $this->_view->generate1();
        }
    }
    