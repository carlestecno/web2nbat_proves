<?php
    class crud{
        private $db;

        public function __construct($conn){
            $this->db = $conn;
        }

        public function getvalues(){
            $sql = "SELECT id_temes FROM `temes` WHERE id_temes=2";
            $result = $this->db->query($sql);
            return $result;
        } 

        public function gettemes(){
            $sql = "SELECT * FROM `temes`";
            $result = $this->db->query($sql);
            return $result;
        }

        public function getexercicis($id){
            $sql = "SELECT *, temes.temes
            FROM exercicis_temes 
            JOIN temes ON exercicis_temes.id_temes = temes.id_temes
            WHERE temes.id_temes = $id";
            $result = $this->db->query($sql);
            return $result;
        }
        
       /*  public function getexercici($id){
            $sql = "SELECT * FROM exercicis_temes WHERE id_numero_exercici = $id";
            $result = $this->db->query($sql);
            return $result;
        } */

        public function getexercici($id){
            $sql = "SELECT *, temes.temes
            FROM exercicis_temes 
            JOIN temes ON exercicis_temes.id_temes = temes.id_temes
            WHERE id_numero_exercici = $id";
            $result = $this->db->query($sql);
            return $result;
        }
    }
?>