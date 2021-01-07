<?php
class NewManager extends Model{

    public function getNews(){
        return $this->getAll('GETALL_NEWS', 'news');
    }

    public function getOneNew($id){
        return $this->getOne("GETONE_NEW", $id, "News");
    }

    public function countComment($id){
        $query = $this->getBdd()->prepare("CALL COUNTCOMMENT (?)");
        $query->execute(array($id));
        $number = $query->fetchColumn();
        return $number;
        $query->closeCursor();
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