<?php
    class Message{
        private $idm;
        private $subject;
        private $message;
        private $datesend;
        private $sender;
        private $email;

        public function __construct(array $data){
            $this->hydrate($data);
        }

        private function hydrate(array $data){
            foreach ($data as $key => $value) {
                $method ='set'.ucfirst($key);
                if(method_exists($this, $method)){
                    $this->$method($value);
                }
            }
        }
        /**
         * Get the value of idm
         */ 
        public function getIdm()
        {
                return $this->idm;
        }

        /**
         * Set the value of idm
         *
         * @return  self
         */ 
        public function setIdm($idm)
        {
                $this->idm = $idm;

                return $this;
        }

        /**
         * Get the value of subject
         */ 
        public function getSubject()
        {
                return $this->subject;
        }

        /**
         * Set the value of subject
         *
         * @return  self
         */ 
        public function setSubject($subject)
        {
                $this->subject = $subject;

                return $this;
        }

        /**
         * Get the value of message
         */ 
        public function getMessage()
        {
                return $this->message;
        }

        /**
         * Set the value of message
         *
         * @return  self
         */ 
        public function setMessage($message)
        {
                $this->message = $message;

                return $this;
        }

        /**
         * Get the value of datesend
         */ 
        public function getDatesend()
        {
                return $this->datesend;
        }

        /**
         * Set the value of datesend
         *
         * @return  self
         */ 
        public function setDatesend($datesend)
        {
                $this->datesend = $datesend;

                return $this;
        }

        /**
         * Get the value of sender
         */ 
        public function getSender()
        {
                return $this->sender;
        }

        /**
         * Set the value of sender
         *
         * @return  self
         */ 
        public function setSender($sender)
        {
                $this->sender = $sender;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }
    }