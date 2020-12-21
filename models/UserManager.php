<?php
    class UserManager extends Model{

        public function getUser(){
            return $this->getAll('user', 'User');
        }

        public function createObject($procedure, $obj){
            $query = self::$bdd->prepare('CALL '.$procedure. '('. $obj->getId(), $obj->getNom(), $obj->getMail(), $obj->getPassword().')');
            $query->execute();
        }
    }