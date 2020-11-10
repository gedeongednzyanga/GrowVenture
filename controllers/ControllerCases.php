<?php
    require_once ('views/View.php');

    class ControllerCases{
        private $_view;

        public function __construct($url)
        {
            if(isset($url) && count($url) > 1)
                throw new Exception('Page introuvable');
            else
                $this->cases();
        }

        private function cases(){
            $this->_view = new View('Cases');
            $this->_view->generate1();
        }
    }