<?php
    class News
    {
        private $idn;
        private $title;
        private $content;
        private $image;
        private $datepub;
        private $refcatnew;
        private $refuser;

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
         * Get the value of idn
         */ 
        public function getIdn()
        {
                return $this->idn;
        }

        /**
         * Set the value of idn
         *
         * @return  self
         */ 
        public function setIdn($idn)
        {
                $this->idn = $idn;

                return $this;
        }

        /**
         * Get the value of content
         */ 
        public function getContent()
        {
                return $this->content;
        }

        /**
         * Set the value of content
         *
         * @return  self
         */ 
        public function setContent($content)
        {
                $this->content = $content;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }

        /**
         * Get the value of datepub
         */ 
        public function getDatepub()
        {
                return $this->datepub;
        }

        /**
         * Set the value of datepub
         *
         * @return  self
         */ 
        public function setDatepub($datepub)
        {
                $this->datepub = $datepub;

                return $this;
        }

        /**
         * Get the value of refcatnew
         */ 
        public function getRefcatnew()
        {
                return $this->refcatnew;
        }

        /**
         * Set the value of refcatnew
         *
         * @return  self
         */ 
        public function setRefcatnew($refcatnew)
        {
                $this->refcatnew = $refcatnew;

                return $this;
        }

        /**
         * Get the value of refuser
         */ 
        public function getRefuser()
        {
                return $this->refuser;
        }

        /**
         * Set the value of refuser
         *
         * @return  self
         */ 
        public function setRefuser($refuser)
        {
                $this->refuser = $refuser;

                return $this;
        }

        /**
         * Get the value of title
         */ 
        public function getTitle()
        {
                return $this->title;
        }

        /**
         * Set the value of title
         *
         * @return  self
         */ 
        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }
    }
    