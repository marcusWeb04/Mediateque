<?php
    namespace App\Model;
    
    abstract class Media{
        public int $id;
        private string $titre;
        private string $auteur;
        private bool $disponible = false;

        public function __contruct($titre,$auteur,$disponible){
            $this->titre = $titre;
            $this->auteur = $auteur;
            $this->disponible = $disponible;
        }

        public function getId(){
            return $this->id;
        }

        public function getTitre(){
            return $this->titre;
        }

        public function setTitre(string $titre){
            $this->titre = $titre;
        }

        public function getAuteur(){
            return $this->auteur;
        }

        public function setAuteur(string $auteur){
            $this->auteur = $auteur;
        }


        public function getDisponible(){
            return $this->disponible;
        }
        
        public function setDisponible(string $disponible){
            $this->disponible = $disponible;
        }

        public function emprunter(){
            return true;
        }

        public function rendre(){
            return false;
        }
    }