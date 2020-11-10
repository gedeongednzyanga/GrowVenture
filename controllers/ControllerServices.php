<?php
    require_once('views/View.php');
    class ControllerServices{

        private $_view;

        public function __construct($url)
        {
            if(isset($url) && count($url) > 1)
                throw new Exception(("Page introuvable"));
            else
                $this->services();
        }

        private function services(){
            $this->_view = new View('Services');
            $this->_view->generate1();
        }
    }