<?php
    class User {
        private $id;
        private $nom;
        private $mail;
        private $password;
        private $role;

        public function __construct(array $data){
            $this->hydrate($data);
        }
        
        public function hydrate(array $data){
           foreach ($data as $key => $value) {
               $method = 'set'.ucfirst($key);
              if(method_exists($this, $method)){
                  $this->$method($value);
              }
           }
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of mail
         */ 
        public function getMail()
        {
                return $this->mail;
        }

        /**
         * Set the value of mail
         *
         * @return  self
         */ 
        public function setMail($mail)
        {
                $this->mail = $mail;

                return $this;
        }

      

        /**
         * Get the value of passwordu
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of passwordu
         *
         * @return  self
         */ 
        public function setPassword($passwordu)
        {
                $this->password = $passwordu;

                return $this;
        }

        /**
         * Get the value of role
         */ 
        public function getRole()
        {
                return $this->role;
        }

        /**
         * Set the value of role
         *
         * @return  self
         */ 
        public function setRole($role)
        {
                $this->role = $role;

                return $this;
        }
    }