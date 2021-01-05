<?php
class NewManager extends Model{

    public function getNews(){
        return $this->getAll('GETALL_NEWS', 'news');
    }

    public function getOneNew($id){
        return $this->getOne("GETALL_NEWS", $id, "News");
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