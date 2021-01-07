<?php
    class Commentaire
    {
        private $idcom;
        private $commentaire;
        private $usercom;
        private $mailuser;
        private $new;
        private $datecom;

        public function __construct(array $data){
            $this->hydrate($data);
        }

        private function hydrate(array $data){
            foreach ($data as $key => $value) {
                $method = 'set'.ucfirst($key);
                if(method_exists($this, $method)){
                    $this->$method($value);
                }
            }
        }

        /**
         * Get the value of idcom
         */ 
        public function getIdcom()
        {
                return $this->idcom;
        }

        /**
         * Set the value of idcom
         *
         * @return  self
         */ 
        public function setIdcom($idcom)
        {
                $this->idcom = $idcom;

                return $this;
        }

        /**
         * Get the value of commentaire
         */ 
        public function getCommentaire()
        {
                return $this->commentaire;
        }

        /**
         * Set the value of commentaire
         *
         * @return  self
         */ 
        public function setCommentaire($commentaire)
        {
                $this->commentaire = $commentaire;

                return $this;
        }

        /**
         * Get the value of usercom
         */ 
        public function getUsercom()
        {
                return $this->usercom;
        }

        /**
         * Set the value of usercom
         *
         * @return  self
         */ 
        public function setUsercom($usercom)
        {
                $this->usercom = $usercom;

                return $this;
        }

        /**
         * Get the value of mailuser
         */ 
        public function getMailuser()
        {
                return $this->mailuser;
        }

        /**
         * Set the value of mailuser
         *
         * @return  self
         */ 
        public function setMailuser($mailuser)
        {
                $this->mailuser = $mailuser;

                return $this;
        }

        /**
         * Get the value of refnew
         */ 
        public function getNew()
        {
                return $this->new;
        }

        /**
         * Set the value of refnew
         *
         * @return  self
         */ 
        public function setNew($refnew)
        {
                $this->new = $refnew;

                return $this;
        }

        /**
         * Get the value of datecom
         */ 
        public function getDatecom()
        {
                return $this->datecom;
        }

        /**
         * Set the value of datecom
         *
         * @return  self
         */ 
        public function setDatecom($datecom)
        {
                $this->datecom = $datecom;

                return $this;
        }
    }
    