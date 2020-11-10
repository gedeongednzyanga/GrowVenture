<?php
    require_once('views/View.php');
        class ControllerAbout{

            private $_view;

            public function __construct($url)
            {
                if(isset($url) && count($url) > 1)
                    throw new Exception('Page introuvable.');
                else
                    $this->about();
            }

            private function about(){
                $this->_view = new View('About');
                $this->_view->generate1();
            }
        }