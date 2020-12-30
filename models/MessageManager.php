<?php
    class MessageManager extends Model
    {
        public function getAllMessage(){
            return $this->getAll('', '');
        }

        public function createObject($action, $procedure, $obj){
            $query = $this->getBdd()->prepare("CALL ".$procedure. " (?,?,?,?,?,?)");
            $query->execute(array($action, $obj->getIdm(), $obj->getSubject(), $obj->getMessage(), $obj->getSender(), $obj->getEmail()));
        }
    }
    