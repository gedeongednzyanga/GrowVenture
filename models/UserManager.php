<?php
    class UserManager extends Model{

        public function getUser(){
            return $this->getAll('user', 'User');
        }

        public function getOneUser($id){
            return $this->getOne("", $id, "User");
        }

        public function createObject($action, $procedure, $obj){
            $query = $this->getBdd()->prepare("CALL ".$procedure." (?,?,?,?,?,?)");
            $query->execute(array($action, $obj->getId(), $obj->getNom(), $obj->getMail(), $obj->getPassword(), $obj->getRole()));
        }
    }

    