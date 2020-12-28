<?php
    require_once('views/View.php');
        class ControllerAdministration{

            private $_view;

            public function __construct($url)
            {
                if(isset($url) && count($url) > 1)
                    throw new Exception('Page introuvable.');
                else
                    $this->administration();
            }

            private function administration(){
                $this->_view = new View('Administration');
                $this->_view->generate1();
            }
        }