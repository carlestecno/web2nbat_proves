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

        public function getexercici($id){
            $sql = "SELECT exercicis_temes.any, exercicis_temes.id_temes, exercicis_temes.numero_exercici, exercicis_temes.imatge
            FROM exercicis_temes 
            JOIN temes ON exercicis_temes.id_temes = temes.id_temes
            WHERE temes.id_temes = $id";
            $result = $this->db->query($sql);
            return $result;
        }
        public function gettema($id){
            $sql = "SELECT temes FROM temes WHERE id_temes = $id";
            $result = $this->db->query($sql);
            return $result;
        }
    }
?>