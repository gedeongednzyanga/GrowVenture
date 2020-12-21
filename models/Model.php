<?php
    abstract class Model{
        private static $bdd;

        private static setBdd(){
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
            $query = self::$bdd->prepare('CALL '.$procedure);
            $query->execute();
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $var = new $obj($data);
            }
            return $var;
            $query->closeCursor();
        }

        protected function createObject($procedure, $obj);
    }