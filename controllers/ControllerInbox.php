<?php
    require_once('views/View.php');
    class ControllerInbox{

        private $_messageManager;
        private $_view;
        public function __construct($url)
        {
            if(isset($url) && count($url) > 1)
                throw new Exception('Page introuvable.');
            else
                $this->inbox();
        }

        private function inbox(){
            $this->_messageManager = new MessageManager();
            $messages = $this->_messageManager->getAllMessage();
            $this->_view = new View('Inbox');
            $this->_view->generate(array('messages'=>$messages));
            //$this->_view->generate1();
        }
    }