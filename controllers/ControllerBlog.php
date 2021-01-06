<?php
    require_once('views/View.php');
    class ControllerBlog{

        private $_newManager;
        private $_view;

        public function __construct($url)
        {
            if(isset($url) && count($url) > 1)
                throw new Exception('Page introuvable.');
            else
                $this->blog();
        }

        private function blog(){
            $this->_newManager = new NewManager();
            $news = $this->_newManager->getNews();
            $this->_view = new View('Blog');
            $this->_view->generate(array("news"=>$news));
        }
    }