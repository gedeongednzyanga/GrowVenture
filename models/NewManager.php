<?php
class NewManager extends Model{
    public function getNews(){
        return $this->getAll('', '');
    }

    public function createObject($action, $procedure, $obj){
        try {
            $query = $this->getBdd()->prepare("CALL ".$procedure. "(?,?,?,?,?,?,?)");
            $query->execute(array($action, $obj->getIdn(), $obj->getTitle(), $obj->getContent(), $obj->getImage(), $obj->getRefcatnew(), $obj->getRefuser()));
        } catch (PDOException $ex) {
            echo  $ex->getMessage();
        }
    }
}