<?php
    require_once('views/View.php');
        class ControllerNews{

            private $_view;

            public function __construct($url)
            {
                if(isset($url) && count($url) > 1)
                    throw new Exception('Page introuvable.');
                else
                    $this->news();
            }

            private function news(){
                $this->_view = new View('News');
                $this->_view->generate1();
            }
        }