<?php
    require_once('views/View.php');
    class ControllerContact{

        private $_view;
        public function __construct($url)
        {
            if(isset($url) && count($url) > 1)
                throw new Exception('Page introuvable.');
            else
                $this->contact();
        }

        private function contact(){
            $this->_view = new View('Contact');
            $this->_view->generate1();
        }
    }