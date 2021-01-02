<?php
    require_once('views/View.php');
    class ControllerCompose{

        private $_view;
        public function __construct($url)
        {
            if(isset($url) && count($url) > 1)
                throw new Exception('Page introuvable.');
            else
                $this->compose();
        }

        private function compose(){
            $this->_view = new View('Compose');
            $this->_view->generate1();
        }
    }