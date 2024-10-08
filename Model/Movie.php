<?php

    namespace App\Model;

    class Movie extends Media{
        private float $duration;
        private string $genre;

        public function __construct($duration, $genre,$titre,$auteur,$disponible)
        {
            $this->duration = $duration;
            $this->genre = $genre;
            parent::__contruct($titre,$auteur,$disponible);
        }
        
        public function getDuration(){
            return $this->duration;
        }

        public function setDuration(float $duration){
            $this->duration = $duration;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function setGenre(string $genre){
            $this->genre = $genre;
        }
    }