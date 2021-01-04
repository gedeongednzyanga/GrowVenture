<?php
    require_once('views/View.php');
    class ControllerRead{

        private $_messageManager;
        private $_view;
        public function __construct($url)
        {
            if(isset($url) && count($url) > 1)
                throw new Exception('Page introuvable.');
            else
                $this->read();
        }

        private function read(){
            $this->_messageManager = new MessageManager();
            $message = $this->_messageManager->getOneMessage(1);
            $this->_view = new View('Read');
            $this->_view->generate(array('message' => $message));
        }
    }