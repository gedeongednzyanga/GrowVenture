<?php
    require_once('views/View.php');
    class ControllerSingle{

        private $_newManager;
        private $_view;
        
        public function __construct($url){
           if(isset($url) && count($url)>1)
            throw new Exception("Page introuvable.");
           else
            $this->signle();
        }

        private function signle(){
            $this->_newManager = new NewManager();
            $news = $this->_newManager->getOneNew(1);
            $this->_view = new View("Single");
            $this->_view->generate(array('news'=>$news));
        }
    }
    