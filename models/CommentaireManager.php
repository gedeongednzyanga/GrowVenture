<?php
    class CommentaireManager extends Model
    {
        public function getAllComent(){
            return $this->getAll("","");
        }

        public function getOnNewComment($id){
            return $this->getOne("GETALL_COMMENT",$id, "commentaire");
        }

        public function createObject($action, $procedure, $obj){
            $query = $this->getBdd()->prepare("CALL ".$procedure. " (?,?,?,?,?,?)");
            $query->execute(array($action, $obj->getIdcom(), $obj->getCommentaire(), $obj->getUsercom(), $obj->getMailuser(), $obj->getNew()));
        }
    }
    