<?php
    class MessageManager extends Model
    {
        public function getAllMessage(){
            return $this->getAll('GETALL_MESSAGE', 'Message');
        }

        public function getOneMessage($id){
            return $this->getOne("", $id, "Message");
        }
        public function createObject($action, $procedure, $obj){
            $query = $this->getBdd()->prepare("CALL ".$procedure. " (?,?,?,?,?,?)");
            $query->execute(array($action, $obj->getIdm(), $obj->getSubject(), $obj->getMessage(), $obj->getSender(), $obj->getEmail()));
        }
    }
    