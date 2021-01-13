<?php
    class CategoryNew
    {
        private $idcat;
        private $designation;

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
         * Get the value of idcat
         */ 
        public function getIdcat()
        {
                return $this->idcat;
        }

        /**
         * Set the value of idcat
         *
         * @return  self
         */ 
        public function setIdcat($idcat)
        {
                $this->idcat = $idcat;

                return $this;
        }

        /**
         * Get the value of designation
         */ 
        public function getDesignation()
        {
                return $this->designation;
        }

        /**
         * Set the value of designation
         *
         * @return  self
         */ 
        public function setDesignation($designation)
        {
                $this->designation = $designation;

                return $this;
        }
    }
    