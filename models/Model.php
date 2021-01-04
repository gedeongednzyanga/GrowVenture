<?php
    abstract class Model{
        private static $bdd;

        private static function setBdd(){
            self::$bdd = new PDO('mysql:host=localhost; dbname=growventure_bd; charset=utf8', 'root', '');
            self::$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

        protected function getBdd(){
            if (self::$bdd == null)
               self::setBdd();
            return self::$bdd;
        }

        protected function getAll($procedure, $obj){
            $var = [];
            $query = $this->getBdd()->prepare('CALL '.$procedure);
            $query->execute();
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $var[] = new $obj($data);
            }
            return $var;
            $query->closeCursor();
        }

        protected function getOne($procedure, $id, $obj){
            $var =[];
            $query = $this->getBdd()->prepare("CALL ".$procedure. "(".$id.")");
            $query->execute();
            while($data = $query->fetch(PDO::FETCH_ASSOC)){
                $var[] = new $obj($data);
            }
            return $var;
            $query->closeCursor();
        }

        protected abstract function createObject($action, $procedure, $obj);
    }