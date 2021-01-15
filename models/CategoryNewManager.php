<?php
    class  CategoryNewManager extends Model
    {
        public function getAllCategories(){
            return $this->getAll("GETALL_CATEGORIES", "categorynew");
        }
        public function getOneCategory($id){
            return $this->getOne("", $id, "");
        }

        public function countNew($id){
            $query = $this->getBdd()->prepare("CALL COUNT_NEW_CAT (?)");
            $query->execute(array($id));
            $number = $query->fetchColumn();
            return $number;
        }

        public function createObject($action, $procedure, $obj){
            $query = $this->getBdd()->prepare("CALL ".$procedure. " (?,?,?)");
            $query->execute(array($action, $obj->getIdcat(), $obj->getDesignation()));
        }
    }
    